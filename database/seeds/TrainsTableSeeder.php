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
            $new_train->Azienda = $faker->company();
            $new_train->Stazione_di_partenza = $faker->city() . ' station';
            $new_train->Stazione_di_arrivo = $faker->city() . ' station';
            $new_train->Orario_di_partenza = $faker->time();
            $new_train->Orario_di_arrivo = $faker->time();
            $new_train->Codice_Treno = 'REG ' .  $faker->numberBetween(1,5000);
            $new_train->Numero_Carrozze = $faker->numberBetween(1,50);
            $new_train->In_orario = $faker->numberBetween(0,1);
            $new_train->Cancellato = $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}
