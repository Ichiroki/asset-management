<?php

namespace App\Models\Office;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleMeetingRoom extends Model
{
    protected $fillable = [
        'name',
        'status'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    use HasFactory;
}
