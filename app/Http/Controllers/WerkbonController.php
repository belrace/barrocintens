<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WerkbonController extends Controller
{
    public function getWerkbon()
    {
        return view('dashboards.maintenance.werkbon');
    }
    public function store()
    {
    }
}
