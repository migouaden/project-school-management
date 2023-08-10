<?php

namespace Database\Factories;

use App\Models\Branche;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $branches = Branche::all();
        return [
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'date_naissance' => new DateTime($this->faker->date()),
            'branche_id' => $this->faker->randomElement($branches)->id
        ];
    }
}
