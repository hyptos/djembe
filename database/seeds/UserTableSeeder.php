<?php

# database/seeds/UserTableSeeder.php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Elodie',
            'email' => 'elo@univ.fr',
            'password' => 'eh',
            'teach' => false
        ]);

        User::create([
            'name' => 'Antoine',
            'email' => 'anto@univ.fr',
            'password' => 'am',
            'teach' => false
        ]);

        User::create([
            'name' => 'Stéphanie',
            'email' => 'jd@univ.fr',
            'password' => 'sjd',
            'teach' => true
        ]);

    }
}
