<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\DriverCrime;
use App\Models\DrivingLicense;
use App\Models\TrafficOfficer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:driver']);
    }

    public function index()
    {
        $driver = DrivingLicense::where('driver_user_id', auth()->user()->id)->get()->first();
        if ($driver == null) {
            return redirect()->to('driver/upload-vehicle');
        } else {
            $todaypoints=0;
            $totalpoints=100;
            $totaloffenses = DriverCrime::where('driver_id', auth()->user()->id)->get();
            if($totaloffenses->count() >=1){
                foreach($totaloffenses as $totaloffense){
                    $dtotalpoints = $totaloffense->points;
                    $totalpoints -=$dtotalpoints;
                }
            }else{
                $totalpoints = 100;
            }
            $todayoffenses = DriverCrime::where(['driver_id'=>auth()->user()->id, 'created_at'=>Carbon::today()])->get();
            if($todayoffenses->count() >=1){
                foreach($todayoffenses as $todayoffense){
                    $checkpoints = $todayoffense->points;
                    $todaypoints +=$checkpoints;
                }
            }else{
                $todaypoints = 0;
            }
            $offenses = DriverCrime::where(['driver_id'=>auth()->user()->id, 'created_at'=>Carbon::today()])->get();
            return view('driver.dashboard', compact(['driver', 'todaypoints','totalpoints', 'offenses']));
        }
    }

    public function uploadvehicle()
    {
        return view('driver.register-vehicle');
    }
    public function uploadlicense(Request $request)
    {
        $this->validate($request, [
            'id_number' => 'required|digits:8|unique:driving_licenses',
            'license_number' => 'required|string|min:7|max:7|unique:driving_licenses',
            'date_of_birth' => 'required|date_format:Y-m-d|before_or_equal:' . Carbon::now()->subYears(18)->format('Y-m-d'),
            'date_of_issue' => 'required|date_format:Y-m-d|before_or_equal:' . Carbon::now()->format('Y-m-d'),
            'gender' => 'required',
            'phone_number' => 'required|digits:10|unique:driving_licenses',
            'date_of_expiry' => 'required|date_format:Y-m-d|after:date_of_issue',
            'county_of_residence' => 'required',
            'plate_number' => 'required|string|min:8|max:8|unique:driving_licenses',
            'uploaded_vehicle' => 'required|image|mimes:jpeg,png,jpg|max:6048',
            'driving_license' => 'required|mimes:PDF,pdf|max:6048'
        ]);

        $license = new DrivingLicense;
        $license->surname = auth()->user()->surname;
        $license->driver_user_id = auth()->user()->id;
        $license->other_names = auth()->user()->other_names;
        $license->id_number = $request->input('id_number');
        $license->license_number = $request->input('license_number');
        $license->date_of_birth = $request->input('date_of_birth');
        $license->date_of_issue = $request->input('date_of_issue');
        $license->gender = $request->input('gender');
        $license->date_of_expiry = $request->input('date_of_expiry');
        $license->county_of_residence = $request->input('county_of_residence');
        $license->plate_number = $request->input('plate_number');
        $license->driver_points = "100";
        $license->driver_verification = "pending";
        $license->phone_number = $request->input('phone_number');

        $fileNameWithExt = $request->uploaded_vehicle->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->uploaded_vehicle->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->uploaded_vehicle->storeAs('vehicles', $filenameToStore, 'public');
        $license->uploaded_vehicle = $filenameToStore;
        $fileNameWithExt = $request->driving_license->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->driving_license->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->driving_license->storeAs('licenses', $filenameToStore, 'public');
        $license->driving_license = $filenameToStore;

        $license->save();

        return redirect()->route('driver');
    }
    public function allpunishments()
    {
        $offenses = DriverCrime::where('driver_id', auth()->user()->id)->orderby('created_at', 'desc')->get();
        return view('driver.all-punishments', compact('offenses'));
    }
    public function accountprofile()
    {
        return view('driver.account-security');
    }
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Toastr::success('password has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);

        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();

        Toastr::success('Email Address has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateavatar(Request $request)
    {
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $user = User::find(auth()->user()->id);
        Storage::delete('public/drivers/' . $user->picture);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('drivers', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();



        Toastr::success('profile Picture has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
