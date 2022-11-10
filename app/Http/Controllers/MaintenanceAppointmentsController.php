<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\maintenance_appointments;

class MaintenanceAppointmentsController extends Controller
{
    public function getAppointments(){
        $allapointments = maintenance_appointments::all();
        return view('dashboards.maintenance.appointmentoverview')->with('allapointments', $allapointments);
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
  
        $data = maintenance_appointments::whereDate('start', '>=', $request->start)
        ->whereDate('end',   '<=', $request->end)
        ->get(['id', 'title', 'start', 'end']);

             return response()->json($data);
        
  
        
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {

        // dd($request->all());
 
        switch ($request->type) {
           case 'add':
              $event = maintenance_appointments::create([
                //   'company_id' => $request->company_id,
                  'company_id' => 1,
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
              
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = maintenance_appointments::find($request->id)->update([
                  'company_id' => $request->company_id,
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
              
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = maintenance_appointments::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
}

