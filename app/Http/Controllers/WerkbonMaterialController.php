<?php

namespace App\Http\Controllers;

use App\Models\werkbon_material;
use Illuminate\Http\Request;

class WerkbonMaterialController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'material_id' => 'required',
            'amount' => 'required',
            'werkbon_id' => 'required',
        ]);

        werkbon_material::create($data);

        return redirect()->back();
    }
}
