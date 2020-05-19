<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_comment extends Model
{
    protected $table = 'user_comment';
    protected $guarded = ['id'];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
