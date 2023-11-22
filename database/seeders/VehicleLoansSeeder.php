<?php

namespace Database\Seeders;

use App\Models\Loans\VehicleLoans;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleLoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleLoans::create([
            "index" => bin2hex(random_bytes(6)),
            "user_id" => 1,
            "department_id" => 12,
            "vehicle_id" => 1,
            "loan_date" => Carbon::createFromFormat('d-m-Y', '23-11-2021')->format('Y-m-d'),
            "return_date" => Carbon::createFromFormat('d-m-Y', '25-11-2021')->format('Y-m-d'),
            "purpose" => "Test",
        ]);

        VehicleLoans::create([
            "index" => bin2hex(random_bytes(6)),
            "user_id" => 5,
            "department_id" => 10,
            "vehicle_id" => 5,
            "loan_date" => Carbon::createFromFormat('d-m-Y', '27-11-2021')->format('Y-m-d'),
            "return_date" => Carbon::createFromFormat('d-m-Y', '28-11-2021')->format('Y-m-d'),
            "purpose" => "Test",
        ]);
    }
}
