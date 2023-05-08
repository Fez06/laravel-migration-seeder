<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
     
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->randomFloat(1, 0, 24);
            $newTrain->arrival_time = $faker->randomFloat(1, 0, 24);
            $newTrain->train_code = $faker->numberBetween(100, 1000);   
            $newTrain->coaches = $faker->randomNumber(1, true);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
