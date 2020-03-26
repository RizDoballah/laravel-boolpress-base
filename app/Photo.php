<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
    'user_id',
    'path',
    'alt'

  ];
  public function user() {
    return $this->belongsTo('App\User');
  }
}
