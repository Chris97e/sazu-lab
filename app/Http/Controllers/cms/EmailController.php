<?php
namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Parametros;

class EmailController extends Controller
{
  function Correo($subject, $body){

    $parametros = Parametros::find(1);
    $key = $parametros->public_key;
    $secret = $parametros->secret_key;
    $code64 = base64_encode($key . ":" . $secret);
    $from = $parametros->from;
    $to = $parametros->to;

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
//    var_dump($response);
    curl_close($curl);
  }
}