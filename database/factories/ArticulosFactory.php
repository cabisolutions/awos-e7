<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'titulo' => $faker-> word,
        'subtitulo' => $faker-> word,
        'contenido' => $faker-> text,
    ];
});
