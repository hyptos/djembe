<?php

# database/seeds/EnseigneTableSeeder.php

use App\Models\Enseigne;
use Illuminate\Database\Seeder;

class EnseigneTableSeeder extends Seeder
{
    public function run()
    {
        Enseigne::create([
            'teacher_id' => 3,
            'learner_id' => 1
        ]);

        Enseigne::create([
            'teacher_id' => 3,
            'learner_id' => 2
        ]);
    }
}