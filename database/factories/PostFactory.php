<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_content'=>$faker->realText(100),
        'post_date'=>$faker->date,
        
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
