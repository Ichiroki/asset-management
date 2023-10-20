<?php

namespace App\Models\Office;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function users() {
        return $this->hasMany(User::class);
    }

    public function departments() {
        return $this->hasMany(Department::class);
    }

    use HasFactory;
}
