<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invites extends Model
{
    protected $fillable = [
        'user_id',
        'email'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
