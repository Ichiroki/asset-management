<?php

namespace App\Models;

use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePIC extends Model
{
    use HasFactory;

    protected $table = 'vehicle_pic';

    protected $fillable = [
        'vehicle_id',
        'user_id',
        'department_id'
    ];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
