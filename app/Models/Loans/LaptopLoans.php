<?php

namespace App\Models\Loans;

use App\Models\Asset\Laptop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class LaptopLoans extends Model
{
    use Searchable;

    protected $table = 'user_loans_laptop';

    protected $fillable = [
        'user_id',
        'loan_date',
        'return_date',
        'status',
        'purpose',
        'laptop_id',
        'information',
        'loan_status'
    ];

    protected $dates = ['loan_date', 'return_date'];

    protected $with = ['user', 'laptop'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function laptop() {
        return $this->belongsTo(Laptop::class, 'laptop_id');
    }

    public function approve() {
        $this->update(['loan_status' => 'Approved']);
    }

    public function reject() {
        $this->update(['loan_status' => 'Rejected']);
    }

    #[SearchUsingPrefix('loan_status')]

    public function toSearchableArray()
    {
        return [
            'loan_status' => $this->loan_status,
            'user' => $this->user->name,
            'laptop' => $this->laptop->name,
            'processor' => $this->laptop->processor,
            'ram' => $this->laptop->ram,
            'main_storage' => $this->laptop->main_storage,
            'department' => $this->department->name,
            'nomorPol' => $this->vehicle->nomorPol
        ];
    }

    use HasFactory;
}
