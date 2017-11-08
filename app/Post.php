<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function category()
    {
        return $this->belongs_to('Category');
    }
    
    // $post->comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    
    // $comment->post->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeleteAt(null);
    }
    
    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();
        return (!is_null($like)) ? true : false;
    }
}