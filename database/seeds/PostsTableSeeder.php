<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Importo la classe Faker

    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
           $newPost = new Post;
           $newPost->image = $faker->image();
           $newPost->title = $faker->text($maxNbChars = 90);
           $newPost->description = $faker->paragraph();
           $newPost->save();
        }
    }
}
