<?php

    use App\Models\Planet;
    use App\Models\solar_system;

    $planets = Planet::all();

    $solarsystems = solar_system::all();

    if (isset($planet)) {
        $planet = ucfirst($planet);
        $collection = collect($planets);
        $planets = $collection->where('name', $planet);
    }

    $solarsystem = "no solar system found";
?>

@foreach ($planets as $planet)
    <h2>{{ $planet->name }}</h2>
    <p>{{ $planet->description }}</p>
    <?php
        foreach($solarsystems as $solar) {
            if ($solar->id = $planet->id) {
                $solarsystem = $solar->name;
            }
        }
    ?>
    <p>solar system: {{ $solarsystem }}</p>
@endforeach

