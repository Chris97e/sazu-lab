<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  public $timestamps = true;
  protected $table = 'imagenes';

  protected $fillable = [
    'ubicacion',
    'identificador',
    'img'
  ];
}
