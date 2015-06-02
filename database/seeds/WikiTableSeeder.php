<?php

# database/seeds/WikiTableSeeder.php

use App\Models\Wiki;
use Illuminate\Database\Seeder;

class WikiTableSeeder extends Seeder
{
    public function run()
    {
        Wiki::create([
            'name' => 'Djembe',
        ]);
    }
}