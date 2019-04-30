<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
      'status',
    ];

    public function team_task() {
      return $this->hasOne('App\model\Team_task');
    }

    public function appointment() {
      return $this->hasOne('App\model\Appointment');
    }
}
