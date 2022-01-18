<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DriverCrime;
use App\Models\DrivingLicense;
use App\Models\TrafficCheckPoint;
use App\Models\TrafficCrime;
use App\Models\TrafficOfficer;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:superadministrator']);
    }

    public function index()
    {

        return view('admin.dashboard');
    }

    public function addcrime()
    {
        return view('admin.add-crime');
    }
    public function uploadcrime(Request $request)
    {
        $this->validate($request, [
            'crime_name' => 'required|string|unique:traffic_crimes',
            'crime_points' => 'required|numeric',
            'crime_description' => 'required|string|unique:traffic_crimes',
        ]);

        $crime = new TrafficCrime;
        $crime->crime_name = $request->input('crime_name');
        $crime->crime_points = $request->input('crime_points');
        $crime->crime_description = $request->input('crime_description');
        $crime->save();
        Toastr::success('New crime has been added.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-crimes');
    }

    public function allcrimes()
    {
        $crimes = TrafficCrime::all();

        return view('admin.all-crimes', compact('crimes'));
    }

    public function editcrime($id)
    {
        $crime = TrafficCrime::findOrFail($id);

        return view('admin.edit-crime', compact('crime'));
    }
    public function updatecrime(Request $request, $id)
    {
        $this->validate($request, [
            'crime_name' => 'required|string',
            'crime_points' => 'required|numeric',
            'crime_description' => 'required|string',
        ]);

        $crime = TrafficCrime::findOrFail($id);
        $crime->crime_name = $request->input('crime_name');
        $crime->crime_points = $request->input('crime_points');
        $crime->crime_description = $request->input('crime_description');
        $crime->save();
        Toastr::success('Crime has been edited.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-crimes');
    }
    public function deletecrime($id)
    {
        $crime = TrafficCrime::findOrFail($id);
        $crime->delete();
        return redirect()->to('admin/all-crimes');
    }

    public function uploadcheckpoint()
    {
        return view('admin.create-checkpoint');
    }

    public function storecheckpoint(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:traffic_check_points',
        ]);

        $checkpoint = new TrafficCheckPoint;
        $checkpoint->name = $request->input('name');
        $checkpoint->save();

        return redirect()->to('admin/all-checkpoints');
    }

    public function allcheckpoints()
    {
        $checkpoints = TrafficCheckPoint::all();
        return view('admin.all-checkpoints', compact('checkpoints'));
    }
    public function editcheckpoint($id)
    {
        $checkpoint = TrafficCheckPoint::findOrFail($id);
        return view('admin.edit-checkpoint', compact('checkpoint'));
    }
    public function updatecheckpoint(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:traffic_check_points',
        ]);

        $checkpoint = TrafficCheckPoint::findOrFail($id);
        $checkpoint->name = $request->input('name');
        $checkpoint->save();
        Toastr::success('Checkpoint has been created.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-checkpoints');
    }

    public function deletecheckpoint($id)
    {
        $checkpoint = TrafficCheckPoint::findOrFail($id);
        $checkpoint->delete();
        return redirect()->to('admin/all-checkpoints');
    }
    public function addofficer()
    {
        $checkpoints = TrafficCheckPoint::all();
        return view('admin.add-officer', compact('checkpoints'));
    }
    public function uploadofficer(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'other_names' => 'required|string',
            'phone_number' => 'required|digits:10|unique:traffic_officers',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'checkpoint' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048'
        ]);

        $user = new User;
        $user->surname = $request->input('surname');
        $user->other_names = $request->input('other_names');
        $user->email = $request->input('email');
        $user->password = bcrypt("password");
        $user->save();
        $user->attachRole('trafficofficer');

        $officer = new TrafficOfficer;
        $officer->traffic_user_id = $user->id;
        $officer->checkpoint_id = $request->input('checkpoint');
        $officer->phone_number = $request->input('phone_number');
        $officer->gender = $request->input('gender');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('officers', $filenameToStore, 'public');
        $officer->picture = $filenameToStore;
        $officer->save();
        Toastr::success('Officer account has been created.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-officers');
    }

    public function allofficers()
    {
        $officers = TrafficOfficer::all();
        return view('admin.all-officers', compact('officers'));
    }
    public function editofficer($officer)
    {
        $officer = TrafficOfficer::findOrFail($officer);
        $checkpoints = TrafficCheckPoint::all();
        return view('admin.edit-officer', compact('officer', 'checkpoints'));
    }
    public function deleteofficer($officer)
    {
        $officer = TrafficOfficer::findOrFail($officer);
        $officer->delete();
        Toastr::error('Officer Account has been deleted.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-officers');
    }
    public function updateofficer(Request $request, $id)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'other_names' => 'required|string',
            'phone_number' => 'required|digits:10|exists:traffic_officers',
            'email' => 'required|email|exists:users',
            'gender' => 'required',
            'checkpoint' => 'required',

        ]);



        $officer = TrafficOfficer::findOrFail($id);
        $officer->checkpoint_id = $request->input('checkpoint');
        $officer->phone_number = $request->input('phone_number');
        $officer->gender = $request->input('gender');
        $officer->save();

        $user = User::findOrFail($officer->traffic_user_id);
        $user->surname = $request->input('surname');
        $user->other_names = $request->input('other_names');
        $user->email = $request->input('email');
        $user->picture = $officer->picture;
        $user->save();
        Toastr::success('Officer Account details Edited successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('admin/all-officers');
    }
    public function accountsecurity()
    {
        return view('admin.account-security');
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
        Storage::delete('public/officers/' . $user->picture);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('officers', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();



        Toastr::success('profile Picture has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function notifieddrivers()
    {
        $drivers = DrivingLicense::where('offense_points', '>=', 10)->orderby('offense_points', 'desc')->get();
        return view('admin.notified-drivers', compact('drivers'));
    }
    public function alldrivers()
    {
        $drivers = DrivingLicense::all();
        return view('admin.all-drivers', compact('drivers'));
    }
    public function redeemdriver($license)
    {
        $licensecheck = DrivingLicense::findorFail($license);
        $licensecheck->offense_points = 0;
        $licensecheck->save();
        
        $offenses = DriverCrime::where('license_id', $license)->get();
        foreach($offenses as $offense){
            $offense->delete();
        }

        Toastr::success('Driver Driving Points  have been renewed.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function driverprofile($driverid){
        $driver = DrivingLicense::findOrFail($driverid);
        $offenses = DriverCrime::where('driver_id', $driver->driver_user_id)->orderby('created_at', 'desc')->get();
        $user = User::findOrFail($driver->driver_user_id);
        $crimes = TrafficCrime::all();
        return view('admin.driver-details', compact(['driver', 'offenses', 'user', 'crimes']));
    }
}
