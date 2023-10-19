<?php

namespace App\Models\Office;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'status'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }

    use HasFactory;
}
