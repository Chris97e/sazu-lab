<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{
  public function __construct()
  {
    $this->setAttrsByDefault();
  }

  public function index(Request $request)
  {
    if ($request->has('id')) {
      $this->store($request);
    }

    // Set data by default
    $this->edit($request, 1);

    $this->data['datos'] = Parametros::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.parametro.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $parametros = Parametros::find($request->id);
      $parametros->fill($data);
      if ($parametros->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $parametros = Parametros::create($data);
      if ($parametros) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $parametros = Parametros::find($id);
    $this->data['edit'] = $parametros;
    //return $this->index($request);
  }
}
