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
            'difficulte' => 1,
        ]);

        Cours::create([
            'titre' => 'Les notes de musique',
            'difficulte' => 1,
        ]);

        Cours::create([
            'titre' => 'Les rythmes',
            'difficulte' => 1,
        ]);
    }
}