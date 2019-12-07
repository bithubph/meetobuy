<?php

use Illuminate\Database\Seeder;

class ServicePro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // ServicePro::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            ServicePro::create([
               
                's_name' =>$faker->name,
                'logo' =>$faker->image,
                'email'=>$faker->email,
                'p_name'=>$faker->services,
                'qualification' =>$faker->certification,
                'description' => $faker->description,
                'min_price' => $faker->amount,
                'tool'=>$faker->equipment,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->region,
                'phone'=>$faker->phone
            ]);
        }
    }
}
