<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class werkbon_material extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Werkbon()
    {
        return $this->belongsTo(werkbon::class, 'werkbon_id');
    }

    public function Materials()
    {
        return $this->belongsTo(material::class, 'material_id');
    }
}
