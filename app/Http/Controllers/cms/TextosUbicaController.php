<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Textos;
use Illuminate\Http\Request;

class TextosUbicaController extends Controller
{
  public function __construct(Request $request)
  {
    $this->setAttrsByDefault();

    $this->data['ubicacion'] = $request->ubicacion;
  }

  public function index(Request $request)
  {
    if ($request->has('id')) {
      $this->store($request);
    }
    $this->data['datos'] = Textos::where('ubicacion', $this->data['ubicacion'])->get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.textos_ubica.formulario', $this->data);
  }

  public function store(Request $request)
  {

    /* $request->id
    $request->identificador
    $request->descripcion
    $request->ubicacion */

    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $texto = Textos::find($request->id);
      $texto->fill($data);
      if ($texto->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $texto = Textos::create($data);
      if ($texto->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $ubicacion, $id)
  {
    $texto = Textos::find($id);
    $this->data['edit'] = $texto;
    return $this->index($request);
  }

  public function destroy(Request $request, $ubicacion, $id)
  {
    Textos::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }
}
