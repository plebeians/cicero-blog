<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'description' => $faker->realText(300),
        'text'=> $faker->realText(900, 4),
        'slug' => $faker->slug,
        'sort' => $faker->numberBetween(1, 1000),
        'seo_description' => $faker->text,
        'seo_keywords' => $faker->text,
        'title' => $faker->text(70),
    ];
});

$factory->afterCreating(Page::class, function ($page, Faker $faker) {
    $page->addMediaFromUrl('https://picsum.photos/1920/1080')->toMediaCollection('thumb');
});
