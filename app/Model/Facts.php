<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    protected $fillable = [
      'icon',
      'number',
      'detail',
    ];
}
