<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SolarSystem extends Model
{
    use HasFactory;


    public function planets() : HasMany {
        return $this->hasMany(Planet::class);
    }

    protected $fillable = [
        'name',
        'age_in_years',
    ];

}
