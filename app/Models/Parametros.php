<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
  protected $table = 'parametros';

  protected $fillable = [
    'public_key',
    'secret_key',
    'from',
    'to'
  ];
  public $timestamps = true;
}
