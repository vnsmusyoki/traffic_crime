<?php

namespace App\Http\Controllers\traffic;

use App\Http\Controllers\Controller;
use App\Models\DrivingLicense;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
            Toastr::error('License Details Not Found. try to search again or add driver to the system.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->to('officer/add-license');
        } else {
            
        }
    }
    public function adddriverlicense()
    {

    }
}
