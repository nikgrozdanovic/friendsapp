<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
    protected $fillable = [
        'user_id',
        'friends_id'
    ];

    protected function friend()
    {
        return $this->hasOne('App\User', 'id', 'friends_id');
    }
}
