<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Car::create(['user_id' => 1]);
        App\Car::create(['user_id' => 2]);

    }
}
