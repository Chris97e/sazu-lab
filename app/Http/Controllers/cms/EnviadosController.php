<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Enviados;

class EnviadosController extends Controller
{
  public function index()
  {
    $this->data['datos'] = Enviados::get();
    $this->data['alert'] = $this->alert;
    return view('cms.content.enviado.listado', $this->data);
  }
}