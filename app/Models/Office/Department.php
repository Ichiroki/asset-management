<?php

namespace App\Models\Office;

use App\Models\Asset\Vehicle;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasRelationships;

    protected $fillable = [
        'name', 'status'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }

    public function vehicle() {
        return $this->hasMany(Vehicle::class);
    }

    use HasFactory;
}
