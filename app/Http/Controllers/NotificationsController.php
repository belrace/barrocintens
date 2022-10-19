<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barrocintens;

class NotificationsController extends Controller
{
    public function getnotification(notification $notification)
    {
        $notification = $notification->get();
        return view('welcome',compact('notification'));
    }
}
