<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    
    use HasFactory;
    public function creator()
    {
        
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function participants()
    {
        
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }
}
