<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potential extends Model
{
    protected $fillable = [
      'title',
      'description',
      'thumbnail',
    ];
}
