<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Clientes;
use App\Models\Equipo;
use App\Models\Textos;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  public function index(Request $request)
  {

    // Geta data
    $texto_superior = Textos::where('ubicacion', 'contacto')->where('identificador', 'texto_superior')->first();
    $texto_superior1 = Textos::where('ubicacion', 'contacto')->where('identificador', 'texto_superior1')->first();
    $texto_superior2 = Textos::where('ubicacion', 'contacto')->where('identificador', 'texto_superior2')->first();
    $texto_superior3 = Textos::where('ubicacion', 'contacto')->where('identificador', 'texto_superior3')->first();
    $titulo = Textos::where('ubicacion', 'contacto')->where('identificador', 'titulo')->first();

    // Set data
    $data = self::getDataBase();
    $data['texto_superior'] = $texto_superior->descripcion;
    $data['texto_superior1'] = $texto_superior1->descripcion;
    $data['texto_superior2'] = $texto_superior2->descripcion;
    $data['texto_superior3'] = $texto_superior3->descripcion;
    $data['titulo'] = $titulo->descripcion;




    return view('front.content.contacto', $data);
  }
}
