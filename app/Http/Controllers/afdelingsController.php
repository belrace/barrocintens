<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class afdelingsController extends Controller
{

    public function getafdeling($afdelingsid)
    {
        $afdeling = Team::findOrfail($afdelingsid);
        $afdelingname = $afdeling->name;
        return view('dashboards.' . $afdeling->name . '.index')->with('afdeling', $afdeling);
    }

    public function viewafdeling($afdelingsid)
    {
        $afdeling = Team::findOrfail($afdelingsid);
        return view('dashboards.base')->with($afdeling);
    }
}
