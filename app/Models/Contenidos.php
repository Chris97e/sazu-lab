<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @file               : Contenidos.php
 * @brief              : Model para acceder a los datos de la tabla Contenidos - Generador de modulos vercion 3.4 
 * @version            : 3.4 
 * @author             : <home> / http://homesas.co
 * @message            : Tarde o temprano la disciplina vence a la inteligencia
 */
class Contenidos extends Model
{
  public $table = "contenidos";
  public $timestamps = true;

  protected $fillable = array(
    "id_cards",
    "titulo",
    "descripcion",
    "imagen",
    "orden",
  );

  public function test()
  {
    return $this->find(1);
  }

  /* public function exampleOnToMany(){
    return $this->hasMany(ClassName::class, "foreign_key", "local_key");
  } */

  public function cards()
  {
    return $this->belongsTo(Cards::class, "id_cards");
  }
}
