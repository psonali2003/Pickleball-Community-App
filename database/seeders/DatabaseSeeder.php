<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
public function run()
{
    
    $this->call([
                
        UsersTableSeeder::class,
        PostsTableSeeder::class,
        CommentsTableSeeder::class,
        EventsTableSeeder::class, 
                
    ]);
    
}



}
