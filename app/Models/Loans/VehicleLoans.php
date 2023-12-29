<?php

namespace App\Models\Loans;

use App\Models\Asset\Vehicle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleLoans extends Model
{
    protected $table = 'user_loans_vehicle';

    protected $fillable = [
        'user_id',
        'department',
        'vehicle_id',
        'loan_date',
        'return_date',
        'status',
        'number_plate',
        'capacity',
        'purpose',
        'loan_status',
        'notes'
    ];

    protected $dates = ['loan_date', 'return_date'];

    protected $with = ['user', 'vehicle'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function approve() {
        $this->update(['loan_status' => 'Approved']);
    }

    public function reject() {
        $this->update(['loan_status' => 'Rejected']);
    }

    protected $auditInclude = [
        'user_id',
        'vehicle_id',
        'loan_date'
    ];

    #[SearchUsingPrefix(['loan_status'])]

    public function toSearchableArray()
    {
        return [
            'loan_status' => $this->loan_status,
            'user' => $this->user->name,
            'vehicle' => $this->vehicle->type,
            'department' => $this->department->name,
            'number_plates' => $this->vehicle->number_plates
        ];
    }

    use HasFactory;
}
