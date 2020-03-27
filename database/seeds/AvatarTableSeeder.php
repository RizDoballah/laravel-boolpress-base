<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use App\User;
use Faker\Generator as Faker;

class AvatarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
          $newAvatar = new Avatar;
          $newAvatar->user_id = $user->id;
          $newAvatar->src = $faker->imageUrl(640, 480);
          $newAvatar->alt = $faker->sentence($nbWords = 6, $variableNbWords = true);
          $newAvatar->description = $faker->text($maxNbChars = 200);
          $newAvatar->save();
        }
    }
}
