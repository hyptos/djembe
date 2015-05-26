<?php

# database/seeds/CoursTableSeeder.php

use App\Models\Cours;
use Illuminate\Database\Seeder;

class CoursTableSeeder extends Seeder
{
    public function run()
    {
        Cours::create([
            'titre' => 'Introduction aux sons',
            'type' => 'solfege',
            'difficulte' => 1,
        ]);

        Cours::create([
            'titre' => 'Les notes de musique',
            'type' => 'solfege',
            'difficulte' => 1,
        ]);

        Cours::create([
            'titre' => 'Les rythmes',
            'type' => 'solfege',
            'difficulte' => 1,
        ]);

        Cours::create([
            'titre' => 'Histoire de la musique',
            'type' => 'histoire',
            'difficulte' => 1,
        ]);
    }
}