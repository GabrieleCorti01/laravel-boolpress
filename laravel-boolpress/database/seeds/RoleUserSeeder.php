<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Role;
use App\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recuperiamo tutti gli utenti registrati nel db
        $users = User::all();
        
        // Recuperiamo tutti i ruoli e ne prendiamo esclusivamente gli id inserendoli in un nuovo array
        $role_ids = Role::pluck('id')->toArray();

        // Per ogni utente
        foreach ($users as $user){
        // Aggiungiamo alla sua lista dei ruoli un ruolo randomicamente preso tra quelli disponibili
        $user->roles()->sync([Arr::random($role_ids), Arr::random($role_ids)]);
        }
    }
}
