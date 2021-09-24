<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (Album::all() as $album){
            $users = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $album->users()->attach($users);
        }
    }
}
