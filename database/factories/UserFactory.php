<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    
    $str = $faker->sentence($nbWords = 5, $variableNbWords = true);
    
    return [
        'title' => $str,
        'content' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'slug' => str_slug($str),
        'category_id' => $faker->numberBetween($min = 2, $max = 4),
        'featured' => $faker->imageUrl(400,300)
    ];
});
