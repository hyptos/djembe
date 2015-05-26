<?php

# database/seeds/ForumTableSeeder.php

use App\Models\Forum;
use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    public function run()
    {
        Forum::create([
            'name' => 'Djembe, bien ou bien ?',
        ]);
    }
}