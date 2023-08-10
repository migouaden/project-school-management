<?php

namespace Database\Seeders;

use App\Models\Matiere;
use App\Models\MatiereNote;
use Illuminate\Database\Seeder;

class MatiereNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MatiereNote::factory()->count(500)->create();
    }
}
