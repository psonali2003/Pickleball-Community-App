<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Post::all()->each(function ($post) {
            
            Comment::factory()->count(3)->create([
                                                 
                'post_id' => $post->id,
                'user_id' => $post->user_id,
                                                 
            ]);
        });
    }
}

