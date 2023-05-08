<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSedeer extends Seeder
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
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->train_code = $faker->bothify('???-###');   
            $newTrain->coaches = $faker->randomNumber(20, false);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
