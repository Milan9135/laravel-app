<?php

    use App\Models\Planet;

    $planets = Planet::all();

    if (isset($planet)) {
        $planet = ucfirst($planet);
        $collection = collect($planets);
        $planets = $collection->where('name', $planet);
    }
?>

@foreach ($planets as $planet)
    <h2>{{ $planet->name }}</h2>
    <p>{{ $planet->description }}</p>
@endforeach

