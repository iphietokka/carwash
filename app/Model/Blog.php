<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $dates = ['date'];

    protected $fillable = [
      'title',
      'img',
      'user_id',
      'date',
      'details',
    ];

    public function users() {
      return $this->belongsTo('App\User', 'user_id');
    }
}
