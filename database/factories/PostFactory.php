<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	$title = $faker->sentence(3);
    return [
    	'user_id' => rand(1,30),
        'name' => $title,
        'body' => $faker->text(300),
        'file' => $faker->imageUrl($width = 100, $height = 100, $category = null, $randomize = true, $word = null, $gray = false)
    ];
});
