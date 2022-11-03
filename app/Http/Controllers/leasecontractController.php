<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leasecontractController extends Controller
{
    //
    public function getleasecontracts(){

        return view('dashboards.finance.leasecontract');
    }
}
