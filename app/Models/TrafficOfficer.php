<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficOfficer extends Model
{
    use HasFactory;
    protected $filable = ['traffic_user_id', 'checkpoint_id', 'phone_number', 'picture', 'gender'];
    public function officeruser()
    {
        return $this->belongsTo(User::class, 'traffic_user_id', 'id');
    }

    public function officercheckpoint()
    {
        return $this->belongsTo(TrafficCheckPoint::class, 'checkpoint_id', 'id');
    }
}
