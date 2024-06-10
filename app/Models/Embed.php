<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embed  extends Model
{
  protected $table = 'embed';

  protected $fillable = [
    'titulo',
    'descripcion',
    'url',
    'ubicacion',
    'estado'
  ];
  public $timestamps = true;
}