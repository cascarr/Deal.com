<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;
    
    
    public function role()
    {
        return $this->belongsToMany(role::class,'role_admins');
    }
    
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    
    
    
    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
    
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

    
}
