<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
    'name',
    'description',
    'created_at',
    'updated_at'

  ];
}
