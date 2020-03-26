<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Faker\Generator as Faker;


class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newPhoto = new Photo;
            $newPhoto->user_id = rand(1, 4);
            $newPhoto->image = "https://picsum.photos/id/" . rand(1,100) . '/300/200';
            $newPhoto->save();
        }
    }
}
