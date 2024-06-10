<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\ProcesoBranding;
use Illuminate\Http\Request;

class ProcesoBrandController extends Controller
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
    $this->data['datos'] = ProcesoBranding::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.procesobrand.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $proceso = ProcesoBranding::find($request->id);
      $proceso->fill($data);
      if ($request->url_img_derecha && $request->url_img_izq) {
        $fileName = time() . '_proceso_' . $request->url_img_derecha->getClientOriginalName();
        $url = $request->file('url_img_derecha')->storeAs('multimedia', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $proceso->url_img_derecha = $file_path;
        $fileName = time() . '_proceso_' . $request->url_img_izq->getClientOriginalName();
        $url = $request->file('url_img_izq')->storeAs('multimedia', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $proceso->url_img_izq = $file_path;
      }
      if ($proceso->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $proceso = ProcesoBranding::create($data);
      if ($request->url_img_derecha && $request->url_img_izq) {
        $fileNameder = time() . '_proceso_' . $request->url_img_derecha->getClientOriginalName();
        $urlder = $request->file('url_img_derecha')->storeAs('multimedia', $fileNameder, 'public');
        $file_pathder = '/storage/' . $urlder;
        $proceso->url_img_derecha = $file_pathder;

        $fileNameizq = time() . '_proceso_' . $request->url_img_izq->getClientOriginalName();
        $urlizq = $request->file('url_img_izq')->storeAs('multimedia', $fileNameizq, 'public');
        $file_pathizq = '/storage/' . $urlizq;
        $proceso->url_img_izq = $file_pathizq;
      }
      if ($proceso->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $proceso = ProcesoBranding::find($id);
    $this->data['edit'] = $proceso;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    ProcesoBranding::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }
}