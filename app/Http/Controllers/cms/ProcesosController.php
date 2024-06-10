<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Casos;
use App\Models\Procesos as Procesos;
use Illuminate\Http\Request;

class ProcesosController extends Controller
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

    $caso = Casos::where('id_cards', $request->cards)->first();
    if (!isset($caso->id)) {
      header('Location: https://sazulab.com/cms/casos/' . $request->cards);
      exit;
    }

    $this->data['id_cards'] = $request->cards;
    $this->data['id_casos'] = $caso->id;

    $this->data['datos'] = Procesos::where('id_casos', $caso->id)->get();
    $this->data['caso'] = $request->cards;
    $this->data['alert'] = $this->alert;
    $this->data['estados'] = $this->estados;

    return view('cms.content.procesos.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $item = Procesos::find($request->id);
      $item->fill($data);
      if ($request->img) {
        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('procesos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      // Save model
      $item = Procesos::create($data);
      if ($request->img) {
        $fileName = time() . '_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('procesos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    }
  }

  public function edit(Request $request, $caso, $id)
  {
    $this->data['edit'] = Procesos::find($id);
    return $this->index($request);
  }

  public function destroy(Request $request, $caso, $id)
  {
    // Delete logical fron DB
    Procesos::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
