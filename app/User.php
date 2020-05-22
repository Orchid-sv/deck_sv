<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable //implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','icon_image','header_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $dates = ['last_login_at'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function deck_comment()
    {
        return $this->hasMany('App\Deck_comment');
    }
    public function user_comment()
    {
        return $this->hasMany('App\Deck_comment');
    }
    public function deck()
    {
        return $this->hasMany('App\deck');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    // public function sendEmailVerificationNotification()
    // {
    // $this->notify(new \App\Notifications\VerifyEmailJapanese);
    // }
}
