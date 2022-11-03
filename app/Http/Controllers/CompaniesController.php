<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CompaniesController extends Controller
{
    //
    public function index()
    {
        $companies = companies::all();
        return view ('dashboards.sales.companies',
            ['companies' => $companies],
        );
    }
    public function store(Request $request)
    {
        $newcompany = new companies();
        $newcompany->name = $request->get('compname');
        $newcompany->phone = $request->get('telnr');
        $newcompany->street = $request->get('street');
        $newcompany->house_number = $request->get('housenr');
        $newcompany->city = $request->get('city');
        $newcompany->country_code = $request->get('country_code');
        $newcompany->contact_id = 1;
        $newcompany->save();
        return redirect()->back();
    }

    public function edit()
    {

    }
    public function update(companies $company)
    {
        $company->bkr_checked_at = Carbon::now();
        $company->save();
        return redirect()->route('dashboard.companies.index');
    }
    public function destroy($id)
    {
        companies::destroy($id);
        return redirect()->route('dashboard.companies.index');
    }
}
