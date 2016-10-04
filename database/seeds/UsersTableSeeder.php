<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,100)->create();//Creació de 100 usuaris
       // factory(\App\User::class)->create(); Creacio d'un usuari
    }
}
