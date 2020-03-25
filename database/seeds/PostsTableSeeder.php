<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        $newPost = new Post();
        $newPost->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
        $newPost->date = $faker->dateTime($max = 'now', $timezone = null);
        $newPost->content = $faker->text($maxNbChars = 500);
        $newPost->status = $faker->word();
        $newPost->type = $faker->word();
        $newPost->tags = $faker->text($maxNbChars = 200);
        $newPost->comment_count = $faker->numberBetween($min = 0, $max = 9000);
        $newPost->like_count = $faker->numberBetween($min = 0, $max = 9000);
        $newPost->save();
    }
  }
}
