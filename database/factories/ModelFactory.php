<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
        'name' =>'xxx',
        'pid' =>1,
        'route' =>'xxx',
        'ishow' =>1,
        'icon' =>'xxx',
        'sort' =>1,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
