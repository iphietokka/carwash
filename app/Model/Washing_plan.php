<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Washing_plan extends Model
{
    //
    protected $fillable = [
      'name',
    ];

    public function washing_include(){
      return $this->hasOne('App\Model\Washing_plan_include');
    }

    public function washing_price(){
      return $this->hasOne('App\Model\Washing_price');
    }

    public function appointment() {
      return $this->hasOne('App\Model\Appointment');
    }
}
