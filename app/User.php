<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

// email verification
// class User extends Authenticatable implements MustVerifyEmail

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo','username','date_birthday','phone','address','role','sex',
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function team_task() {
      return $this->hasOne('App\Model\Team_task');
    }

    public function blogs() {
      return $this->hasOne('App\Model\Blog');
    }

    public function appointment() {
      return $this->belongsToMany('App\Model\Appointment', 'appointment_users');
    }
}
