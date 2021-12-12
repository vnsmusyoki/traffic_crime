<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverCrime extends Model
{
    use HasFactory;
    protected $fillable = ['crime_id', 'driver_id', 'points', 'officer_id', 'checkpoint_id', 'license_id', 'vehicle'];

    public function drivercrimecrime()
    {
        return $this->belongsTo(TrafficCrime::class, 'crime_id', 'id');
    }
    public function drivercrimelicense()
    {
        return $this->belongsTo(DrivingLicense::class, 'license_id', 'id');
    }
    public function drivercrimedriver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }
    public function drivercrimeofficer()
    {
        return $this->belongsTo(TrafficOfficer::class, 'officer_id', 'id');
    }
    public function drivercrimecheckpoint()
    {
        return $this->belongsTo(TrafficCheckPoint::class, 'checkpoint_id', 'id');
    }
}
