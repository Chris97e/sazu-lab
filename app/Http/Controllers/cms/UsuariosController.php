<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

  public $roles_set = [];

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

    $this->data['datos'] = Usuario::get();
    $this->data['roles'] = Role::get();
    $this->data['roles_set'] = $this->roles_set;
    $this->data['alert'] = $this->alert;

    return view('cms.content.usuarios.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);
    unset($data['roles']);
    if (trim($data['pass']) == '') {
      unset($data['pass']);
    } else {
      $data['pass'] = md5($data['pass']);
    }

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $user = Usuario::find($request->id);
      $user->update($data);
      $user->roles()->sync($request->roles);

      // Set new mesage
      $this->alert = 'El registro ha sido actualizado con exito';
    } else {
      // Save model
      $user = Usuario::create($data);
      $user->roles()->sync($request->roles);

      // Set new mesage
      $this->alert = 'El registro ha sido creado con exito';
    }

//    return $this->index();
  }

  public function edit(Request $request, $id)
  {
    // Get data base
    $user = Usuario::find($id);
    $this->data['edit'] = $user;
    
    $rolesTmp = $user->roles;
    foreach ($rolesTmp as $item) {
      $this->roles_set[] = $item->id;
    }
    
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    // Delete logical fron DB
    Usuario::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
