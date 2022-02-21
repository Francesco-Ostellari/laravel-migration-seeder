<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 70 ; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->words(2, true); 
            $newTrain->departure_station = $faker->city(); 
            $newTrain->arrival_station = $faker->city(); 
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_date = $faker->dateTimeBetween('-1 week', '+1 week');; 
            $newTrain->departure_time = $faker->time(); 
            $newTrain->arrival_time = $faker->time(); 
            $newTrain->train_code = $faker->regexify("[A-Z]{3}[0-9]{5}");
            $newTrain->carriages = $faker->numberBetween(1, 6);
            $newTrain->on_time = $faker->boolean();
            $newTrain->delete = $faker->boolean();
            $newTrain->save();
        }
    }
}
