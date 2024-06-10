<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Cards as Cards;
use Illuminate\Http\Request;

class CardsController extends Controller
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

    $this->data['datos'] = Cards::get();
    $this->data['alert'] = $this->alert;
    $this->data['estados'] = $this->estados;
    $this->data['estados_bool'] = $this->estados_bool;

    return view('cms.content.cards.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $item = Cards::find($request->id);
      $item->fill($data);

      // Save file
      if ($request->img_listado) {
        $fileName = time() . '_' . $request->img_listado->getClientOriginalName();
        $url = $request->file('img_listado')->storeAs('cards', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_listado = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      // Save model
      $item = Cards::create($data);

      // Save file
      if ($request->img_listado) {
        $fileName = time() . '_' . $request->img_listado->getClientOriginalName();
        $url = $request->file('img_listado')->storeAs('cards', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_listado = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $this->data['edit'] = Cards::find($id);
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    // Delete logical fron DB
    Cards::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
