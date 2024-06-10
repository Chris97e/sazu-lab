<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Clientes;
use App\Models\Contenidos;
use App\Models\Equipo;
use App\Models\Textos;
use Illuminate\Http\Request;

class EstrategiaController extends Controller
{
  public function index(Request $request)
  {

    // Geta data
    $texto_superior = Textos::where('ubicacion', 'estrategia')->where('identificador', 'texto_superior')->first();
    $marquee = Textos::where('ubicacion', 'estrategia')->where('identificador', 'marquee')->first();
    $titulot1 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'titulot1')->first();
    $text1 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text1')->first();
    $text2 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text2')->first();
    $text3 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text3')->first();
    $text4 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text4')->first();
    $text5 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text5')->first();
    $text6 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text6')->first();
    $text7 = Textos::where('ubicacion', 'estrategia')->where('identificador', 'text7')->first();
    $pietext = Textos::where('ubicacion', 'estrategia')->where('identificador', 'pietext')->first();
    $rueda = Textos::where('ubicacion', 'estrategia')->where('identificador', 'rueda')->first();

    $contenidos = Contenidos::where('id_cards', 3)->orderBy('orden', 'ASC')->get();

    // Set data
    $data = self::getDataBase();
    $data['texto_superior'] = $texto_superior->descripcion;
    $data['marquee'] = $marquee->descripcion;
    $data['titulot1'] = $titulot1->descripcion;
    $data['text1'] = $text1->descripcion;
    $data['text2'] = $text2->descripcion;
    $data['text3'] = $text3->descripcion;
    $data['text4'] = $text4->descripcion;
    $data['text5'] = $text5->descripcion;
    $data['text6'] = $text6->descripcion;
    $data['text7'] = $text7->descripcion;
    $data['pietext'] = $pietext->descripcion;
    $data['rueda'] = $rueda->descripcion;
    $data['contenidos'] = $contenidos;

    return view('front.content.estrategia', $data);
  }
}
