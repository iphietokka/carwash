<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle_company extends Model
{
    protected $fillable = [
      'vehicle_company',
    ];

    public function vehicle_modal(){
      return $this->hasOne('App\Model\Vehicle_modal');
    }

    public function appointment() {
      return $this->hasOne('App\Model\Appointment');
    }

}
