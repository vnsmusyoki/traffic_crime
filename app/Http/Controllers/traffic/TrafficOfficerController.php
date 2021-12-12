<?php

namespace App\Http\Controllers\traffic;

use App\Http\Controllers\Controller;
use App\Models\DrivingLicense;
use App\Models\TrafficCrime;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class TrafficOfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:trafficofficer']);
    }

    public function index()
    {

        return view('traffic.dashboard');
    }

    public function addoffense()
    {
        return view('traffic.add-offense');
    }
    public function searchlicense(Request $request)
    {
        $this->validate($request, [
            'id_number' => 'required|digits:8',
            'license_number' => 'required|string|min:7|max:7',
        ]);

        $idnumber = $request->input('id_number');
        $license = $request->input('license_number');
        $driver = DrivingLicense::where(['id_number' => $idnumber, 'license_number' => $license])->get()->first();

        if ($driver == null) {
            Toastr::error('License Details Not Found. try to search again or add driver to the system.', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->to('officer/add-license');
        } else {
            Toastr::success('License Details  Found. ', 'Success', ["positionClass" => "toast-top-right"]);
            return view('traffic.driver-profile');
        }
    }
    public function adddriverlicense()
    {
        $offenses = TrafficCrime::all();
        return view('traffic.register-vehicle', compact('offenses'));
    }
    public function uploadlicense(Request $request)
    {

        $this->validate($request, [
            'driver_mistakes'=>'required|array',
            'surname' => 'required|string',
            'other_names' => 'required|string',
            'email' => 'required|email|unique:users',
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

        $passwordlength = 6;
        $str = "1234567890";
        $password = substr(str_shuffle($str), 0, $passwordlength);

        $driver = new User;
        $driver->surname = $request->input('surname');
        $driver->other_names = $request->input('other_names');
        $driver->email = $request->input('email');
        $driver->password = bcrypt($password);
        $driver->save();

        $license = new DrivingLicense;
        $license->surname = $request->input('surname');
        $license->driver_user_id = $driver->id;
        $license->other_names = $driver->other_names;
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

        // return redirect()->route('driver');
    }
}
