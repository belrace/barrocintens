<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Werkbon_Materials()
    {
        return $this->hasMany(werkbon_material::class, 'material_id');
    }

    public function Stocks()
    {
        return $this->belongsTo(stock::class, 'material_id');
    }
}
