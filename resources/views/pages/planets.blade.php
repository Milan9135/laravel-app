<?php

use App\Models\Planet;
use App\Models\SolarSystem;

$planets = Planet::with('solarSystem')->get();

if (isset($planet)) {
    $planet = ucfirst($planet);
    $collection = collect($planets);
    $planets = $collection->where('name', $planet);
}

?>

@foreach ($planets as $planet)
    <h2>{{ $planet->name }}</h2>
    <p>{{ $planet->description }}</p>
    <p>Solar system: {{ $planet->SolarSystem->name }}</p>
@endforeach
