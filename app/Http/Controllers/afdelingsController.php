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
        return redirect('/dashboard/' . $afdelingname);
    }
}
