<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class werkbon extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function WorkHours()
    {
        return $this->hasMany(workhour::class, 'workhour_id');
    }

    public function WerkbonMaterials()
    {
        return $this->hasMany(werkbon_material::class, 'werkbon_materials_id');
    }

    public function Companies()
    {
        return $this->belongsTo(companies::class, 'company_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
