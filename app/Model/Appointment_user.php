<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointment_user extends Model
{

    protected $fillable = [
      'user_id',
      'appointment_id',
      'discount',
      'advance',
      'payment_mode_id',
      'remark',
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function appointment(){
      return $this->belongsTo('App\model\Appointment');
    }

    public function payment_mode(){
      return $this->belongsTo('App\model\Payment_mode');
    }
}
