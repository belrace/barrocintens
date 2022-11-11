<?php

namespace App\Http\Controllers;

use App\Models\material;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $items = material::all();
        return view('dashboards.Admin.index', [
            'items' => $items,
        ]);
    }
}
