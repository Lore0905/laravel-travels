<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++) {

            $vehicles = [
                'automobile',
                'nave',
                'aereo'
            ];
    
            $new_travel = new Travel();
            $new_travel->name = 'viaggio a ' . $faker->city();
            $new_travel->destination = $faker->city() . ', ' . $faker->country();
            $new_travel->vehicle = $faker->randomElement($vehicles);
            $new_travel->price = $faker->randomFloat(2, 50, 20000);
            $new_travel->number_of_days = $faker->numberBetween(1, 25);
            $new_travel->save();
        }
        

    }
}
