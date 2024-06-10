<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @file               : Resultados.php
 * @brief              : Model para acceder a los datos de la tabla resultados - Generador de modulos vercion 3.4 
 * @version            : 3.4 
 * @author             : <home> / http://homesas.co
 * @message            : Tarde o temprano la disciplina vence a la inteligencia
 */
class Resultados extends Model
{
  public $table = "resultados";
  public $timestamps = true;

  protected $fillable = array(
    "id_casos",
    "orden",
    "estado",
    "titulo",
    "texto",
  );

  public function test()
  {
    return $this->find(1);
  }

  /* public function exampleOnToMany(){
    return $this->hasMany(ClassName::class, "foreign_key", "local_key");
  } */
    
  public function casos()
  {
    return $this->belongsTo(Casos::class, "id_casos");
  }
}
