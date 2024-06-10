<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
  protected $table = 'equipo';

  protected $fillable = [
    'nombre',
    'descripcion',
    'imagen',
    'orden'
  ];
  public $timestamps = true;
}
