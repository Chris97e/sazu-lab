<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function logout(Request $request)
  {
    session()->forget('user_cms');
    return redirect('/');
  }

  public function index(Request $request)
  {
    // Validate if user prev login
    if (session()->has('user_cms')) {
      return redirect('cms');
    }

    // Valdiate post
    if ($request->correo) {
      // Validate user exist and superadmisnitrador
      $usuario = Usuario
        ::where('correo', $request->correo)
        ->where('pass', md5($request->pass))
        ->first();

      // Validate if isset user data
      if (!isset($usuario->id)) {
        return view('cms.content.login', ['alert' => 'El nombre de usuario o la contraseña son invalidos']);
      }

      // Validate rol superadmin
      foreach ($usuario->roles as $rol) {
        if ($rol->id == 1) {
          session(['user_cms' => md5($usuario->id)]);
          return redirect('cms');
        }
      }

      return view('cms.content.login', ['alert' => 'El usuario no cuenta con los privilegios para acceder al CMS']);
    }

    return view('cms.content.login', ['alert' => '']);
  }
}
