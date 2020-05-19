<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deck extends Model
{   
    protected $table = 'deck';
    protected $guarded = ['id'];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
