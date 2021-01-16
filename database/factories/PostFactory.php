<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'section' => $faker->word,
        'content' => $faker->text,
        'image' => $faker->word,
        'video' => $faker->word,
        'published' => $faker->word,
        'order' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
