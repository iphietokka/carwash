<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle_modal extends Model
{
    protected $fillable = [
      'vehicle_company_id',
      'vehicle_modal',
    ];

    public function vehicle_company(){
      return $this->belongsTo('App\Model\Vehicle_company');
    }

    public function appointment() {
      return $this->hasOne('App\Model\Appointment');
    }
}
