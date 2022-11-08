<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    public function Werkbon()
    {
        return $this->hasMany(werkbon::class, 'company_id');
    }
}
