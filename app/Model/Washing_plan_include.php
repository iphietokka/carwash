<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Washing_plan_include extends Model
{
    //
    protected $fillable = [
      'washing_plan_id',
      'washing_plan_include',
    ];

    public function washing_plan(){
      return $this->belongsTo('App\Model\Washing_plan');
    }
}
