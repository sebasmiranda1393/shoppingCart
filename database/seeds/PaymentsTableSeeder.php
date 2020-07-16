<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Payments::create(['car_id' => 1,'pay_method_id' => 1, 'credit_card' => '2300','password_card' => '2']);
        App\Payments::create(['car_id' => 2,'pay_method_id' => 2, 'credit_card' => '1300','password_card' => '2']);

    }
}
