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
    public function getWerkbon()
    {
        $companies = companies::all();
        $materials = material::all();
        $werkbon_materials = werkbon_material::all();
        $hours = workhour::all();

        //until-from=answer

        return view('dashboards.maintenance.werkbon', [
            'companies' => $companies,
            'materials' => $materials,
            'werkbon_materials' => $werkbon_materials,
            'hours' => $hours,
        ]);
    }

    public function getWerkbonnen()
    {
        $werkbonnen = werkbon::all();
        $companies = companies::all();
        return view('dashboards.maintenance.werkbon_overzicht', [
            'werkbonnen' => $werkbonnen,
            'companies' => $companies,
        ]);
    }
    public function store()
    {
    }


    // public function getcompanies()
    // {
    //     $companies = companies::all();

    //     return view('dashboards.sales.notes', [
    //         'companies' => $companies,
    //     ]);
    // }
    // public function store()
    // {
    //     $data = request()->validate([
    //         'note' => 'required | max:255 | min: 3',
    //         'company_id' => 'required | min: 1',
    //     ]);

    //     $data['date'] = date('Y-m-d');
    //     $data['author_id'] = Auth::id();

    //     notes::create($data);

    //     return redirect('/dashboard/sales');
    // }
}
