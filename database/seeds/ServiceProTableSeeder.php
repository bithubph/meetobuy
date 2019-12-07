<?php

use Illuminate\Database\Seeder;
require_once 'vendor/autoload.php';
use App\ServicePro;

class ServiceProTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            ServicePro::create([
               
                's_name' =>$faker->name,
                'logo' =>$faker->image,
                'email'=>$faker->email,
                'p_name'=>$faker->name,
                'qualification' =>$faker->name,
                'description' => $faker->text,
                'min_price' => $faker->numberBetween($min = 100, $max = 9000),
                'tool'=>$faker->name,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'phone'=>$faker->e164PhoneNumber
            ]);
        }
    }
}
