<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storingmelding;

class StroingmedlingController extends Controller
{
    public function index()
        {
            return view(
                'dashboards.maintenance.storingmedling',
                [
                    'storingmelding' => storingmelding::all(), 
                ]
                );
        }
        public function create ()
        {
            return view('dashboards.maintenance.storingmedling');
        }

        public function store()
        {
            $data = request()->validate([
                'title'=> ['required']
            ]);

            $data['user_id'] = 0;

            storingmelding::create($data);
            
            return redirect('/');


        }
}


