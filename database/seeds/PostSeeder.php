<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){

            $newPost = new Post();
            $newPost->title = $faker->words(5,true);
            $newPost->body = $faker->text();
            $newPost->save();
        }
    }
}
