<?php
namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clientes;

class ClientesController extends Controller
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
    $this->data['datos'] = Clientes::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.clientes.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $clientes = Clientes::find($request->id);
      $clientes->fill($data);
      if ($request->img) {
        $fileName = time() . '_clientes_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('multimedia/clientes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $clientes->img = $file_path;
      }
      if ($clientes->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $clientes = Clientes::create($data);
      if ($request->img) {
        $fileName = time() . '_clientes_' . $request->img->getClientOriginalName();
        $url = $request->file('img')->storeAs('multimedia/clientes', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $clientes->img = $file_path;
      }
      if ($clientes->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $clientes = Clientes::find($id);
    $this->data['edit'] = $clientes;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    Clientes::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }

}