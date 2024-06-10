<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\ImagenesBranding;
use Illuminate\Http\Request;

class ImagenBrandController extends Controller
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
    $this->data['datos'] = ImagenesBranding::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.imagenbrand.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $img = ImagenesBranding::find($request->id);
      $img->fill($data);
      if ($request->imagen) {
        $fileName = time() . '_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $img->imagen = $file_path;
      }
      if ($img->save()) {
        $this->alert = 'El registro ha sido actualizado con exito... '.$url;
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $img = ImagenesBranding::create($data);
      if ($request->imagen) {
        $fileName = time() . '_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $img->imagen = $file_path;
      }
      if ($img->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $img = ImagenesBranding::find($id);
    $this->data['edit'] = $img;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    ImagenesBranding::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }
}
