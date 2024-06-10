<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Clientes;
use App\Models\Contenidos;
use App\Models\Equipo;
use App\Models\Textos;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
  public function index(Request $request)
  { 

    // Geta data
    $texto_superior = Textos::where('ubicacion', 'contenido')->where('identificador', 'texto_superior')->first();
    $marquee = Textos::where('ubicacion', 'contenido')->where('identificador', 'marquee')->first();
    $vid1 = Textos::where('ubicacion', 'contenido')->where('identificador', 'vid1')->first();
    $vid2 = Textos::where('ubicacion', 'contenido')->where('identificador', 'vid2')->first();
    $vid3 = Textos::where('ubicacion', 'contenido')->where('identificador', 'vid3')->first();
    $vid4 = Textos::where('ubicacion', 'contenido')->where('identificador', 'vid4')->first();
    $vid5 = Textos::where('ubicacion', 'contenido')->where('identificador', 'vid5')->first();
    $titulo2 = Textos::where('ubicacion', 'contenido')->where('identificador', 'titulo2')->first();
    $audiovisual = Textos::where('ubicacion', 'contenido')->where('identificador', 'audiovisual')->first();
    $video = Textos::where('ubicacion', 'contenido')->where('identificador', 'video')->first();
    $video2 = Textos::where('ubicacion', 'contenido')->where('identificador', 'video2')->first();
    $video3 = Textos::where('ubicacion', 'contenido')->where('identificador', 'video3')->first();
    $video4 = Textos::where('ubicacion', 'contenido')->where('identificador', 'video4')->first();
    $video5 = Textos::where('ubicacion', 'contenido')->where('identificador', 'video5')->first();
    $video6 = Textos::where('ubicacion', 'contenido')->where('identificador', 'video6')->first();

    $contenidos = Contenidos::where('id_cards', 3)->orderBy('orden', 'ASC')->get();

    // Set data
    $data = self::getDataBase();
    $data['texto_superior'] = $texto_superior->descripcion;
    $data['marquee'] = $marquee->descripcion;
    $data['vid1'] = $vid1->descripcion;
    $data['vid2'] = $vid2->descripcion;
    $data['vid3'] = $vid3->descripcion;
    $data['vid4'] = $vid4->descripcion;
    $data['vid5'] = $vid5->descripcion;
    $data['titulo2'] = $titulo2->descripcion;
    $data['video'] = $video->descripcion;
    $data['video2'] = $video2->descripcion;
    $data['video3'] = $video3->descripcion;
    $data['video4'] = $video4->descripcion;
    $data['video5'] = $video5->descripcion;
    $data['video6'] = $video6->descripcion;
    $data['audiovisual'] = $audiovisual->descripcion;
    $data['contenidos'] = $contenidos;

    return view('front.content.contenido', $data);
  }
}
