<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
     'title',
     'date',
     'content',
     'status',
     'type',
     'tags',
     'comment_count',
     'like_count'
 ];
}
