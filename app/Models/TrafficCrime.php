<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficCrime extends Model
{
    use HasFactory;

    protected $fillable = ['crime_name', 'crime_points', 'crime_description'];
}
