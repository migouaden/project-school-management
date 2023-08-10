<?php

namespace Database\Factories;

use App\Models\Matiere;
use App\Models\Stagiaire;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $profs = User::all();
        $stagiaires = Stagiaire::all();
        $matieres = Matiere::all();
        return [
            'prof_id' => $this->faker->randomElement($profs)->id,
            'stagiaire_id' => $this->faker->randomElement($stagiaires)->id,
            'matiere_id' => $this->faker->randomElement($matieres)->id,
            'note' => $this->faker->numberBetween(0, 20)
        ];
    }
}
