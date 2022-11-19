<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function getDateAttribute($value)
    {  
        return $this->created_at->diffForHumans();
    }
    public function ScopeLatestFirst(){
        return $this->orderBy('created_at','desc');
    }
}