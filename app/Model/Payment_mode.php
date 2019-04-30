<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment_mode extends Model
{
    protected $fillable = [
      'mode',
    ];

    public function appointment_user(){
      return $this->hasOne('App\Model\Appointment_user');
    }
}
