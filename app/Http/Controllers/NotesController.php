<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function getnotes()
    {
        return view('dashboards.sales.notes');
    }
}
