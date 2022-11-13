<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\material;
use App\Models\Team;
use App\Models\User;
use App\Models\werkbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $items = material::all();
        $werkbonnen = werkbon::all();
        $companies = companies::all();
        $lastWerkbon = werkbon::all()->last();
        return view('dashboards.Admin.index', [
            'items' => $items,
            'werkbonnen' => $werkbonnen,
            'companies' => $companies,
            'lastWerkbon' => $lastWerkbon,
        ]);
    }
}
