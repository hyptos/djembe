<?php

# database/seeds/ImageExoTableSeeder.php

use App\Models\ImageExo;
use Illuminate\Database\Seeder;

class ImageExoTableSeeder extends Seeder
{
    public function run()
    {
        ImageExo::create([
            'url' => 'ekfsekpoz',
        ]);

        ImageExo::create([
            'url' => 'efeskhfesi',
        ]);

        ImageExo::create([
            'url' => 'oepjsfs',
        ]);
    }
}