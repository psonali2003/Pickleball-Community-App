<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;
    
    public function definition()
    {
        return [
            
            'user_id' => User::factory(), 
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'location' => $this->faker->address,
            
        ];
    }
}

