<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
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

$factory->define(Image::class, function (Faker $faker) {
    return [
        'id' => $faker->name,
        'thumbnail_filename' => $faker->name,
        'image_filename' => $faker->name,
        'original_filename' => $faker->name,
        'height' => $faker->name,
        'width' => $faker->name,
        'checksum' => $faker->name,
        'deleted_at' => $faker->name,
    ];
});
