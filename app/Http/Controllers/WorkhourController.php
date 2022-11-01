<?php

namespace App\Http\Controllers;

use App\Models\workhour;
use Illuminate\Http\Request;

class WorkhourController extends Controller
{
    public function store(Request $request)
    {
        $data = request()->validate([
            'date' => 'required',
            'from' => 'required',
            'until' => 'required',
            'hourlypay' => 'required',
        ]);

        workhour::create($data);

        return redirect()->back();
    }
}
