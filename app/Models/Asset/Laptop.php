<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
        'name',
        'no_asset',
        'date_used',
        'processor',
        'ram',
        'main_storage',
        'extend_storage',
        'vga',
        'monitor'
    ];

    use HasFactory;
}
