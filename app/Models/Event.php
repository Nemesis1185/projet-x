<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    
    public function category (){
        
        return $this->belongsTo(Category::class);
        
    }
    
    
    public function user (){
        
        return $this->hasMany(User::class);
        
    }

    
    public function comments(){
        
        return $this->hasMany(Comment::class);
    }
}
