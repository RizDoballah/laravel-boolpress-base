<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Faker\Generator as Faker;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

          $newPhoto = new Photo;
          $newPhoto->user_id = rand(1, 3);
          $newPhoto->path = $faker->imageUrl(640, 480);
          $newPhoto->alt = $faker->sentence($nbWords = 6, $variableNbWords = true);
          $newPhoto->save();
        }
    }
}
