<?php

namespace App\Models\Asset;

use App\Models\Loans\VehicleLoans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'type',
        'number_plates',
        'capacity',
        'status'
    ];

    public function vehicleLoans() {
        return $this->hasMany(VehicleLoans::class, 'vehicle_id');
    }

    use HasFactory;
}
