<?php

# database/seeds/UserTableSeeder.php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $password = bcrypt('secret');

        User::create([
            'name' => 'Elodie',
            'email' => 'elo@univ.fr',
            'password' => $password,
            'teach' => false
        ]);

        $faker = Faker::create();

        foreach (range(1, 100) as $index)
        {
            User::create([
                'email'      => $faker->email,
                'password'   => $password,
                'name'       => $faker->firstName,
                'teach'      => $faker->boolean(20)
            ]);
        }
    }
}
