<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck_comment extends Model
{   
    protected $table = 'deck_comment';
    protected $guarded = ['id'];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
