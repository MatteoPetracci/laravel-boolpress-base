<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Avatar;
use Faker\Generator as Faker;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $allUsers = User::all();
        // dd($allUsers)
        foreach ($allUsers as $user) {
           $newAvatar = new Avatar();
           $newAvatar->user_id = $user->id;
           $newAvatar->image = "https://i.pravatar.cc/200";
           $newAvatar->save();
       }
    }
}
