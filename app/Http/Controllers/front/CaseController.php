<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cards;
use App\Models\Casos;
use App\Models\Clientes;
use App\Models\Equipo;
use App\Models\Procesos;
use App\Models\Resultados;
use App\Models\Textos;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class CaseController extends Controller
{
  public function index(Request $request)
  {
    /* echo "asd: {$request->caso}";
    exit; */
    if (!isset($request->caso)) {
      $this->redirectToHome();
    }

    $card = Cards::where('url', $request->caso)->first();
    if (!isset($card->id)) {
      // $this->redirectToHome();
    }

    $caso = Casos::where('id_cards', $card->id)->first();
    if (!isset($caso->id)) {
      // $this->redirectToHome();
    }

    // Set data
    $data = self::getDataBase();
    $data['card'] = $card;
    $data['caso'] = $caso;
    $data['resultados'] = Resultados::where('id_casos', $caso->id)->orderBy('orden', 'ASC')->get();
    $data['procesos'] = Procesos::where('id_casos', $caso->id)->orderBy('orden', 'ASC')->get();

    return view('front.content.case', $data);
  }

  public function redirectToHome()
  {
    header('Location: https://sazulab.com');
    exit;
  }
}
