<?php

namespace App\Http\Controllers;

use App\Models\material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $items = material::all();
        return view('dashboards.maintenance.materialen', [
            'items' => $items,
        ]);
    }
}
