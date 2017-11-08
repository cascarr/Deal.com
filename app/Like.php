<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    use SoftDelete;
    
    protected $table = 'likeables';
    
    protected $fillable = [
        'admin_id',
        'likeable',
        'likeable_type',
    ];
    
    public function postis()
    {
        return $this->morphedByMany('App\Post', 'likeable');
    }
}
