<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\ImagenesBranding as ImagenesBranding;
use Illuminate\Http\Request;

class ImagenesBrandingController extends Controller
{

  public function __construct()
  {
    // Set data by default
    $this->setAttrsByDefault();
  }

  public function index(Request $request)
  {
    if ($request->has('id')) {
      $this->store($request);
    }

    $this->data['datos'] = ImagenesBranding::get();
    $this->data['alert'] = $this->alert;
    $this->data['estados'] = $this->estados;

    return view('cms.content.imagenes_branding.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $item = ImagenesBranding::find($request->id);
      $item->fill($data);
      if ($request->imagen) {
        $fileName = time() . '_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->imagen = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      // Save model
      $item = ImagenesBranding::create($data);
      if ($request->imagen) {
        $fileName = time() . '_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('imagenes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->imagen = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $this->data['edit'] = ImagenesBranding::find($id);
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    // Delete logical fron DB
    ImagenesBranding::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
