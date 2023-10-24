<?php

namespace App\Models\Asset;

use App\Models\Office\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'jenis',
        'nomorPol',
        'kapasitas',
        'pic'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }

    use HasFactory;
}
