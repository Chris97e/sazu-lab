<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Clientes;
use App\Models\Equipo;
use App\Models\Textos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {

    // Geta data
    $equipos = Equipo::orderBy('orden', 'ASC')->get();
    $clientes = Clientes::where('estado', '1')->orderBy('orden', 'ASC')->get();
    $texto_superior = Textos::where('ubicacion', 'home')->where('identificador', 'texto_superior')->first();
    $manifiesto = Textos::where('ubicacion', 'home')->where('identificador', 'manifiesto')->first();
    $header = Textos::where('ubicacion', 'home')->where('identificador', 'header')->first();
    $footerc = Textos::where('ubicacion', 'home')->where('identificador', 'footerc')->first();
    $footers = Textos::where('ubicacion', 'home')->where('identificador', 'footers')->first();
    $footerbtn = Textos::where('ubicacion', 'home')->where('identificador', 'footerbtn')->first();
    $mision = Textos::where('ubicacion', 'home')->where('identificador', 'mision')->first();

    // Set data
    $data = self::getDataBase();
    $data['texto_superior'] = $texto_superior->descripcion;
    $data['manifiesto'] = $manifiesto->descripcion;
    $data['equipos'] = $equipos;
    $data['clientes'] = $clientes;
    //$data['header'] = $header->descripcion;
    $data['footerc'] = $footerc->descripcion;
    $data['footers'] = $footers->descripcion;
    $data['footerbtn'] = $footerbtn->descripcion;
    $data['mision'] = $mision->descripcion;

    return view('front.content.home', $data);

  }
}
