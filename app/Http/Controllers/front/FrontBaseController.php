<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Parametros;
use Illuminate\Http\Request;

class FrontBaseController extends Controller
{

  public function index(Request $request)
  {
    if ($request->has('nombre') && $request->has('empresa')) {
      $this->store($request);
    }
    return view('front.content.gracias');
  }

  public function store(Request $request)
  {
    $data = $request->all();
    $data['mensaje'] = nl2br($data['mensaje']);
    $fecha = date('Y-m-d H:i:s');

    $body = "Existe un nuevo mensaje:<br><br>
    Fecha: {$fecha}<br>
    Nombre: {$data['nombre']}<br>
    empresa: {$data['empresa']}<br>
    email: {$data['email']}<br>
    telefono: {$data['telefono']}<br>
    mensaje: {$data['mensaje']}<br>
    ";
    $this->Correo($body);
    return true;
  }

  public function Correo($body)
  {
    $parametros = Parametros::find(1);
    $key = $parametros->public_key;
    $secret = $parametros->secret_key;
    $code64 = base64_encode($key . ":" . $secret);
    $from = $parametros->from;
    $to = $parametros->to;
    $subject = 'Nuevo contacto Sazulab';

    /* $MJ_APIKEY_PUBLIC = '5e66ba866752777ae8f1d5cf574cb38f';
    $MJ_APIKEY_PRIVATE = '1866e6092eba7f2664a0cf65c54d2b69';
    $code64 = base64_encode($MJ_APIKEY_PUBLIC . ":" . $MJ_APIKEY_PRIVATE);
    $from = 'ruben@homesas.co';
    $subject = 'Nuevo contacto Sazulab';
    $to = 'rubenshotcito1615@gmail.com'; */

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.mailjet.com/v3.1/send',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode(array(
        "Messages" => [
          [
            "From" => ["Email" => $from],
            "To" => [["Email" => $to]],
            "Subject" => $subject,
            "HTMLPart" => $body,
          ]
        ]
      )),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic ' . $code64
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    /* var_dump($response);
    exit; */
  }
}
