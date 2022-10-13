<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class afdelingsController extends Controller
{

    public function getafdeling($afdelingid)
    {
        $afdeling = team::findOrfail($afdelingid);
        $afdelingname = $afdeling->name;

        return redirect('/dashboard/'. $afdelingname);

    }

}
