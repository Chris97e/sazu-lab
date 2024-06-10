<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Imagen;

class ImagenController extends Controller
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
    $this->data['ubicacion'] = $request->ubicacion;
    $this->data['datos'] = Imagen::where('ubicacion', $request->ubicacion)->get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.imagen.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $img = Imagen::find($request->id);
      $img->fill($data);
      if ($request->img) {
        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $img->img = $file_path;
      }
      if ($img->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $img = Imagen::create($data);
      if ($request->img) {
        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $img->img = $file_path;
      }
      if ($img->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $ubicacion,  $id)
  {
    $img = Imagen::find($id);
    $this->data['edit'] = $img;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    Imagen::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }
}
