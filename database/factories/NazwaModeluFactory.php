<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
// database/factories/NazwaModeluFactory.php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\People::class, function (Faker $faker) {
    return [
        'imie' => $faker->firstName,
        'nazwisko' => $faker->lastName,
        'numer_telefonu' => $faker->phoneNumber,
        'ulica' => $faker->streetAddress,
        'miasto' => $faker->city,
        'kraj' => $faker->country,
        'wzrost' => $faker->numberBetween(150, 200), 
        'waga' => $faker->numberBetween(40, 120),  
    ];
});

}
