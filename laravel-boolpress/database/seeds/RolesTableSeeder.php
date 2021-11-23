<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roleList = ['copy-writer', 'manager', 'publicator', 'creator'];

        for ($i = 1; $i < 4; $i++){
            $newRole = new Role();
            $newRole->rank = $i+1;
            $newRole->name = $roleList[$i-1];
            $newRole->color = $faker->hexColor();
            $newRole->save();
        }
    }
}
