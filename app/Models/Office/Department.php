<?php

namespace App\Models\Office;

use App\Models\Asset\Vehicle;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Department extends Model
{
    use HasRelationships, Searchable;

    protected $fillable = [
        'name', 'status'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }

    public function vehicles() {
        return $this->morphMany(Vehicle::class, 'pic_id');
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name
        ];
    }

    use HasFactory;
}
