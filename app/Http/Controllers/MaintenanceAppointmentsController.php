<?php

namespace App\Http\Controllers;

use App\Models\maintenance_appointments;
use Illuminate\Http\Request;

class MaintenanceAppointmentsController extends Controller
{
    public function getAppointments(){
        $allapointments = maintenance_appointments::all();
        return view('dashboards.maintenance.appointmentoverview')->with('allapointments', $allapointments);
    }
}
