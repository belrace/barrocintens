<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use Illuminate\Http\Request;
use App\Models\barrocintens;

class NotificationsController extends Controller
{
    public function getNotifications()
    {
        $notifications = notifications::all();

        return view('dashboards.maintenance.index')->with('notifications', $notifications);
    }
}
