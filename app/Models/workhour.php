<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workhour extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Werkbon()
    {
        return $this->belongsTo(werkbon::class, 'werkbon_id');
    }
}
