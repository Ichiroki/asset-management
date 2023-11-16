<?php

namespace App\Models\Asset;

use App\Models\Loans\VehicleLoans;
use App\Models\Office\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'jenis',
        'nomorPol',
        'capacity',
        'pic'
    ];

    public function vehicleLoans() {
        return $this->hasMany(VehicleLoans::class, 'vehicle_id');
    }

    use HasFactory;
}
