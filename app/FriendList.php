<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
    protected $fillable = [
        'user_id',
        'friends_id'
    ];

    public function friend()
    {
        return $this->belongsTo('App\User', 'friends_id', 'id');
    }
}
