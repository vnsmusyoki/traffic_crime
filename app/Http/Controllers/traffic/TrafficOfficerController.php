<?php

namespace App\Http\Controllers\traffic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function addoffense(){
        return view('traffic.add-offense');
    }
}
