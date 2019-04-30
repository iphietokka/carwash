<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'photo', 'sex', 'date_birthday', 'phone', 'address', 'date_join', 'status', 'post',
    ];

    public function social_teams(){
      return $this->hasOne('App\Model\Social_team');
    }

    public function team_task() {
      return $this->hasOne('App\Model\Team_task');
    }
}
