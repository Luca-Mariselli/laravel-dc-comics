<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20; $i++) { 
            $newComic = new Comic();
            $newComic->name = $faker->sentence(3);
            $newComic->price = $faker->randomFloat(2, 0.99, 69.99);
            $newComic->release_year = $faker->year();
            $newComic->artist = $faker->name;
            $newComic->description = $faker->sentence;
            $newComic->save();
        }
    }
}
