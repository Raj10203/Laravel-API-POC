<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'drone_name',
        'serial_number',
        'battrey_capacity_mah',
        'max_flight_time_minutes',
        'camera_specs',
        'status',
        'last_maintenance_date'
    ];

    public function inspections() {
        return $this->hasMany(Inspection::class);
    }
}
