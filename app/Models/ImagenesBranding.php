<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenesBranding extends Model
{
  protected $table = 'imagenes_branding';

  protected $fillable = [
    'descripcion',
    'clase',
    'orden',
    'imagen'
  ];
  public $timestamps = true;
}
