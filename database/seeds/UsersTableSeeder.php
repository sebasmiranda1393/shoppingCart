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
        App\User::create(['name' => 'Erika','email' => 'ingerika.forero@gmail.com', 'password' => '123456']);
        App\User::create(['name' => 'Sebastian','email' => 'sebasmirandadc@gmail.com', 'password' => '123456']);

    }
}
