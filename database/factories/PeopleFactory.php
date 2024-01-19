<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PeopleFactory extends Factory
{
    protected $model = \App\Models\People::class;

    public function definition()
    {
        return [
            'imie' => $this->faker->firstName,
            'nazwisko' => $this->faker->lastName,
            'numer_telefonu' => $this->faker->phoneNumber,
            'ulica' => $this->faker->streetAddress,
            'miasto' => $this->faker->city,
            'kraj' => $this->faker->country,
            'wzrost' => $this->faker->numberBetween(150, 200),
            'waga' => $this->faker->numberBetween(40, 120),
        ];
    }
}