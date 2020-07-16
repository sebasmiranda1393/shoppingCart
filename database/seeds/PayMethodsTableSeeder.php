<?php

use Illuminate\Database\Seeder;

class PayMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PayMethods::create(['method' => 'tarjeta credito']);
        App\PayMethods::create(['method' => 'tarjeta debito']);

    }
}
