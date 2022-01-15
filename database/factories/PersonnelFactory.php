<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->firstName(),
            'tel' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'adresse' => $this->faker->address(),
            'matricule' => $this->faker->numberBetween(),
        ];
    }
}
