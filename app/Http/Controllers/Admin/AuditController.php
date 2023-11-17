<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loans\VehicleLoans;
use Illuminate\Support\Arr;

class AuditController extends Controller
{
    public function index() {

        $veh = VehicleLoans::find(1)->audits;
        // dd($veh->getMetadata());
        return view("pages.activity.audit", [
            'title' => 'Audit Log',
            'audits' => $veh
        ]);
    }
}
