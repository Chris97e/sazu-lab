<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
    $this->data['datos'] = Slider::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.slider.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $slider = Slider::find($request->id);
      $slider->fill($data);
      if ($request->url_img) {
        $fileName = time() . '_slider_' . $request->url_img->getClientOriginalName();
        $url = $request->file('url_img')->storeAs('multimedia', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $slider->url_img = $file_path;
      }
      if ($slider->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $slider = Slider::create($data);
      if ($request->url_img) {
        $fileName = time() . '_slider_' . $request->url_img->getClientOriginalName();
        $file_path = '/storage/' . $request->file('url_img')->storeAs('multimedia', $fileName, 'public');
        $slider->url_img = $file_path;
      }
      if ($slider->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
    return redirect()->back()->with('success', $this->alert);
  }

  public function edit(Request $request, $id)
  {
    $slider = Slider::find($id);
    $this->data['edit'] = $slider;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    Slider::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }
}