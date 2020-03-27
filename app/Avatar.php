<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
      'user_id',
      'src',
      'alt',
      'description'
    ];

    public $timestamps = false;

    public function user() {
      return $this->belongsTo('App\User');
    }

}
