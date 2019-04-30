<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
      'c_name',
      'logo',
      'phone',
      'address',
      'email',
      'website'
    ];
}
