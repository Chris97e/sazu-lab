<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Textos extends Model
{
  protected $table = 'textos';

  protected $fillable = [
    'ubicacion',
    'identificador',
    'descripcion'
  ];
  public $timestamps = true;
}
