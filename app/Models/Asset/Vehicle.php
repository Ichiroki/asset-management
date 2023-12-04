<?php

namespace App\Models\Asset;

use App\Models\Loans\VehicleLoans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'jenis',
        'number_plates',
        'capacity',
        'pic_id',
        'pic_type'
    ];

    public function vehicleLoans() {
        return $this->hasMany(VehicleLoans::class, 'vehicle_id');
    }

    public function pic() {
        return $this->morphTo();
    }

    use HasFactory;
}
