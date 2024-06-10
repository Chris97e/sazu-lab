<?php
namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Equipo;

class EquipoController extends Controller
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
    $this->data['datos'] = Equipo::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.equipo.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    if (isset($request->id) && (int)$request->id > 0) {
      $equipo = Equipo::find($request->id);
      $equipo->fill($data);
      if ($request->imagen) {
        $fileName = time() . '_equipo_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('multimedia', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $equipo->imagen = $file_path;
      }
      if ($equipo->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      $equipo = Equipo::create($data);
      if ($request->imagen) {
        $fileName = time() . '_equipo_' . $request->imagen->getClientOriginalName();
        $url = $request->file('imagen')->storeAs('multimedia', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $equipo->imagen = $file_path;
      }
      if ($equipo->save()) {
        $this->alert = 'El registro ha sido creado con exito';
      } else {
        $this->alert = 'Hubo un error al crear el registro';
      }
    }
  }

  public function edit(Request $request, $id)
  {
    $equipo = Equipo::find($id);
    $this->data['edit'] = $equipo;
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    Equipo::find($id)->delete();
    $this->alert = 'El registro ha sido eliminado con exito';
    return $this->index($request);
  }

}