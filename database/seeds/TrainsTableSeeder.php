<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city() . ' station';
            $new_train->arrival_station = $faker->city() . ' station';
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = 'REG ' .  $faker->numberBetween(1,5000);
            $new_train->carriages_number = $faker->numberBetween(1,50);
            $new_train->in_time = $faker->numberBetween(0,1);
            $new_train->deleted = $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}
