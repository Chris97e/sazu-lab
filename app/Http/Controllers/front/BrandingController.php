<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Clientes;
use App\Models\Contenidos;
use App\Models\Equipo;
use App\Models\ImagenesBranding;
use App\Models\Textos;
use Illuminate\Http\Request;

class BrandingController extends Controller
{
  public function index(Request $request)
  {

    // Geta data
    $texto_superior = Textos::where('ubicacion', 'branding')->where('identificador', 'texto_superior')->first();
    $marquee = Textos::where('ubicacion', 'branding')->where('identificador', 'marquee')->first();
    $titulo1 = Textos::where('ubicacion', 'branding')->where('identificador', 'titulo1')->first();
    $text1 = Textos::where('ubicacion', 'branding')->where('identificador', 'text1')->first();
    $text2 = Textos::where('ubicacion', 'branding')->where('identificador', 'text2')->first();
    $text3 = Textos::where('ubicacion', 'branding')->where('identificador', 'text3')->first();
    $text4 = Textos::where('ubicacion', 'branding')->where('identificador', 'text4')->first();


    // Set data
    $data = self::getDataBase();
    $data['texto_superior'] = $texto_superior->descripcion;
    $data['marquee'] = $marquee->descripcion;
    $data['titulo1'] = $titulo1->descripcion;
    $data['text1'] = $text1->descripcion;
    $data['text2'] = $text2->descripcion;
    $data['text3'] = $text3->descripcion;
    $data['text4'] = $text4->descripcion;
    $data['destacados'] = ImagenesBranding::orderBy('orden', 'ASC')->get();
    $data['contenidos'] = Contenidos::where('id_cards', 4)->orderBy('orden', 'ASC')->get();

    return view('front.content.branding', $data);
  }
}
