<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Opening_hour extends Model
{
    protected $fillable = [
      'day',
      'opening_time',
      'closing_time',
    ];
}
