<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcesoBranding extends Model
{
  protected $table = 'proceso_branding';

  protected $fillable = [
    'titulo',
    'descripcion',
    'texto_difuminado',
    'orden',
    'url_img_derecha',
    'url_img_izq',
    'estado'
  ];
  public $timestamps = true;
}
