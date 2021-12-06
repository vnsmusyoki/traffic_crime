<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingLicense extends Model
{
    use HasFactory;
    protected $fillable = ['surname', 'other_names', 'id_number', 'license_number', 'date_of_birth', 'date_of_issue', 'gender', 'date_of_expiry', 'county_of_residence', 'plate_number', 'uploaded_vehicle', 'driving_license', 'driver_points', 'driver_verification', 'phone_number','driver_user_id'];

    protected $dates = ['date_of_expiry'];
}
