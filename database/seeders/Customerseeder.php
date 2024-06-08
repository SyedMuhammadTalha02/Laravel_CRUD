<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=100; $i++) {
        $customer = new Customer;
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->password = $faker->password;
        $customer->address = $faker->address;
        $customer->gender = "M";
        $customer->city = $faker->city;
        $customer->dob = $faker->date;
        $customer->save();
        }
    }
}
