<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = 'sliders';

  protected $fillable = [
    'titulo',
    'descripcion',
    'texto_sobrepuesto',
    'url_img',
    'estado',
    'ubicacion'
  ];
  public $timestamps = true;
}
