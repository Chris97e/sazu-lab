<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
  protected $table = 'redes';

  protected $fillable = [
    'titulo',
    'enlace',
    'clase'
  ];
  public $timestamps = true;
}