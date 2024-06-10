<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enviados extends Model
{
  protected $table = 'enviados';

  protected $fillable = [
    'desde',
    'hacia',
    'asunto',
    'mensaje'
  ];
  public $timestamps = true;
}
