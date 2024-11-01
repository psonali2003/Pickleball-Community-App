<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Post; 

class PostsTableSeeder extends Seeder
{
    
    public function run()
    {
        
        User::all()->each(function ($user) {
            Post::factory()->count(3)->create(['user_id' => $user->id]);
            
        });
    }
}
