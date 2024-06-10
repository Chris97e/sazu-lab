<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use App\Models\Red;
use App\Models\Textos;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public $data = [];
  public $alert = '';
  public $estados = [];
  public $estados_bool = [];

  public function setAttrsByDefault()
  {
    $this->estados = [
      (object) ['id' => 0, 'estado' => 'Inactivo'],
      (object) ['id' => 1, 'estado' => 'Activo']
    ];
    $this->estados_bool = [
      (object) ['id' => 0, 'estado' => 'No'],
      (object) ['id' => 1, 'estado' => 'Si']
    ];

    $this->data['edit'] = (object) [
      'id' => null,
      'texto_difuminado' => null,
      'url_img_derecha' => null,
      'url_img_izq' => null,
      'ubicacion' => null,
      'identificador' => null,
      'enlace' => null,
      'texto_sobrepuesto' => null,
      'clase' => null,
      'imagen' => null,
      'url_img' => null,
      'nombre' => null,
      'usuario' => null,
      'apellido' => null,
      'correo' => null,
      'pass' => null,
      'descripcion' => null,
      'sigla' => null,
      'centros_id' => null,
      'proyectos_tipos_id' => null,
      'keywords' => null,
      'slug' => null,
      'fecha_entrega' => null,
      'img_list' => null,
      'url' => null,
      'intro' => null,
      'producto_tipo' => null,
      'producto_path' => null,
      'calificacion' => null,
      'proyectos_id' => null,
      'usuarios_id' => null,
      'comentario' => null,
      'estado' => null,
      'programas_id' => null,
      'ficha' => null,
      'programa' => null,
      'multimedia' => null,
      'img_icon' => null,
      'version' => null,
      'ano' => null,
      'tipo' => null,
      'rol' => null,
      'comentarios_devolucion' => null,
      'roles_id' => null,
      'multimedias_tipos_id' => null,
      'titulo' => null,
      'texto' => null,
      'img' => null,
      'orden' => null,
      'color' => null,
      'img_listado' => null,
      'es_caso' => null,
      'id_cards' => null,
      'col1' => null,
      'col2' => null,
      'col3' => null,
      'contexto' => null,
      'img_left' => null,
      'img_right' => null,
      'iframe' => null,
      'id_casos' => null,
    ];
  }

  public static function getDataBase()
  {
    $titulo_formulario = Textos::where('ubicacion', 'contacto')->where('identificador', 'titulo_formulario')->first();
    $nuestra_mision = Textos::where('ubicacion', 'contacto')->where('identificador', 'nuestra_mision')->first();
    return [
      'redes' => Red::orderBy('id', 'ASC')->get(),
      'cards' => Cards::where('estado', 1)->orderBy('orden', 'ASC')->get(),
      'titulo_formulario' => $titulo_formulario->descripcion,
      'nuestra_mision' => $nuestra_mision->descripcion,
    ];
  }
}
