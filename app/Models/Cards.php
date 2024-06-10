<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @file               : Cards.php
 * @brief              : Model para acceder a los datos de la tabla cards - Generador de modulos vercion 3.4 
 * @version            : 3.4 
 * @author             : <home> / http://homesas.co
 * @message            : Tarde o temprano la disciplina vence a la inteligencia
 */
class Cards extends Model
{
  use SoftDeletes;
  public $table = "cards";
  public $timestamps = true;

  protected $fillable = array(
    "titulo",
    "orden",
    "descripcion",
    "url",
    "img_listado",
    "estado",
    "es_caso",
  );

  public function test()
  {
    return $this->find(1);
  }

  /* public function exampleOnToMany(){
    return $this->hasMany(ClassName::class, "foreign_key", "local_key");
  } */
    
}
