<?php

namespace Database\Seeders;

use App\Models\Mill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50 ; $i++) {
            $mill = new Mill();
            $mill->name = $faker->unique()->firstName();
            $mill->region = $faker->unique()->city();
            $mill->country = $faker->unique()->country();
            $mill->picture = $faker->unique()->imageUrl(400,600, 'mills');
            $mill->watermill = $faker->boolean(15);
            $mill->size = $faker->numberBetween(400, 18000);
            $mill->mills_no = $faker->numberBetween(1, 10);
            $mill->save();
        }
    }
}
