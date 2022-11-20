<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $dates = ['published_at'];

    public function author(){
        return $this->belongsTo(User::class);
    }
    public function getDateAttribute($value)
    {  
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }
    public function ScopeLatestFirst($query){
        return $query->orderBy('created_at','desc');
    }
    public function ScopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }
}