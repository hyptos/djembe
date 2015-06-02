<?php

# database/seeds/StatsTableSeeder.php

use App\Models\Stats;
use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{
    public function run()
    {
        Stats::create([
            'reussite' => '50',
            'temps' => '50',
            'avancement' => '50',
            'user_id' => 1,
            'cours_id' => 2,
            'exercice_id' => 2,
        ]);

        Stats::create([
            'reussite' => '60',
            'temps' => '60',
            'avancement' => '60',
            'user_id' => 2,
            'cours_id' => 1,
            'exercice_id' => 2
        ]);

    }
}
