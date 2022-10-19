<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(){

        return $this->belongs(User::class, 'user_id');
    }
    public function notification(){

        return $this->hasMany(notification::class, 'notification_id');
    }
}
