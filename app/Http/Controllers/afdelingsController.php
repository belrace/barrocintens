<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class afdelingsController extends Controller
{

    public function getafdeling($afdelingid)
    {
        $afdeling = team::findOrfail($afdelingid);
        if (Auth::user()->currentTeam->id == $afdeling->id) {
            $afdelingname = $afdeling->name;
            return redirect('/dashboard/' . $afdelingname);
        } else {
            return "je hoort niet bij deze afdeling!";
        }
    }
}
