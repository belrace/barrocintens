<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\material;
use App\Models\werkbon;
use App\Models\werkbon_material;
use App\Models\workhour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WerkbonController extends Controller
{
    public function getWerkbon($id)
    {
        $werkbon = werkbon::find($id);
        $materials = material::all();
        $hours = workhour::where('werkbon_id', $id)->get();
        $items = werkbon_material::where('werkbon_id', $id)->get();
        return view('dashboards.maintenance.werkbon', [
            'werkbon' => $werkbon,
            'materials' => $materials,
            'items' => $items,
            'hours' => $hours,
        ]);
    }

    public function getWerkbonnen()
    {
        $werkbonnen = werkbon::all();
        $companies = companies::all();
        $lastWerkbon = werkbon::all()->last();
        return view('dashboards.maintenance.werkbon_overzicht', [
            'werkbonnen' => $werkbonnen,
            'companies' => $companies,
            'lastWerkbon' => $lastWerkbon,
        ]);
    }
    public function store()
    {
        $data = request()->validate([
            'company_id' => 'required | min: 1',
            'title' => 'required | min: 1',
        ]);

        $data['user_id'] = Auth::id();

        werkbon::create($data);

        return redirect('/dashboard/maintenance/werkbon/overzicht');
    }
}
