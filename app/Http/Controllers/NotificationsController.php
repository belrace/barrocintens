<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use Illuminate\Http\Request;
use App\Models\barrocintens;
use App\Models\User;

class NotificationsController extends Controller
{
    public function getNotifications()
    {
        $notifications = notifications::all();
        $users = User::where('current_team_id', 4)->get();
        return view('dashboards.maintenance.index')->with(compact('notifications','users'));
        
    }
}
