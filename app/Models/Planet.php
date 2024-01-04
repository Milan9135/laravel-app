<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $table = "planets";

    public function solar_systems() {
        return $this->belongsTo(solar_system::class);
    }

    protected $fillable = [
        'name',
        'description',
        'size_in_km',
        'solar_system_id'
    ];
}
