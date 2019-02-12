<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
  return [
    'title' => $faker->company,
    'image' => $faker->imageUrl($width = 800, $height = 480),
    'description' => $faker->paragraph(),
    'start_date' => $faker->dateTimeAD($max = 'now'),
    'end_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+5 years'),
    'address' => $faker->address,
    'postcode' => $faker->postcode,
    'city' => $faker->city,
    'state' => $faker->state,
    'country' => $faker->country,
    'telephone' => $faker->phoneNumber,
    'website_url' => $faker->domainName,
    'company_id' => $faker->numberBetween($min = 1, $max = 10),
  ];
});
