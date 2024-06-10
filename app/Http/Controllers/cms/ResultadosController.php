<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Casos;
use App\Models\Resultados as Resultados;
use Illuminate\Http\Request;

class ResultadosController extends Controller
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
    $this->data['datos'] = Resultados::where('id_casos', $caso->id)->get();
    $this->data['alert'] = $this->alert;
    $this->data['estados'] = $this->estados;

    return view('cms.content.resultados.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $item = Resultados::find($request->id);
      $item->fill($data);

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      // Save model
      $item = Resultados::create($data);

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    }
  }

  public function edit(Request $request, $cards, $id)
  {
    $this->data['edit'] = Resultados::find($id);
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    // Delete logical fron DB
    Resultados::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
