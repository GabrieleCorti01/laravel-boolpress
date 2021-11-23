<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = 'Gabriele';
        $user->email = 'mailg@gmail.com';
        $user->password = bcrypt('gabri01');

        $user->save();

        for($i = 0; $i < 20; $i++){
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->safeEmail();
            $user->password = bcrypt($faker->password(7,12));

            $user->save();
        }
    }
}
