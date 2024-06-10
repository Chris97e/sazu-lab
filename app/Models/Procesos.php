<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @file               : Procesos.php
 * @brief              : Model para acceder a los datos de la tabla procesos - Generador de modulos vercion 3.4 
 * @version            : 3.4 
 * @author             : <home> / http://homesas.co
 * @message            : Tarde o temprano la disciplina vence a la inteligencia
 */
class Procesos extends Model
{
  public $table = "procesos";
  public $timestamps = true;

  protected $fillable = array(
    "id_casos",
    "titulo",
    "orden",
    "texto",
    "img",
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
