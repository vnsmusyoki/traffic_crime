<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        return view('driver.dashboard');
    }

    public function uploadvehicle()
    {
        return view('driver.register-vehicle');
    }
}
