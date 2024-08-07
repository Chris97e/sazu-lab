<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Casos as Casos;
use Illuminate\Http\Request;

class CasosController extends Controller
{

  public function __construct()
  {
    // Set data by default
    $this->setAttrsByDefault();
  }

  public function index(Request $request)
  {
    if ($request->has('id')) {
      $this->store($request);
    }

    $this->data['id_cards'] = $request->cards;
    $this->data['datos'] = Casos::get();
    $this->data['alert'] = $this->alert;
    $this->data['estados'] = $this->estados;

    // Set data by default
    $casos = Casos::where('id_cards', $request->cards)->first();
    if (!isset($casos->id)) {
      $casos = Casos::create([
        'id_cards' => $request->cards,
        'imagen_background' => '',
        'header' => '<h2><span style="color: rgb(236, 240, 241);"><em>Caso de estudio</em></span></h2>
        <h1><span style="color: rgb(236, 240, 241);"><strong>DEFECTO / EJEMPLO</strong></span></h1>
        <h2><span style="color: rgb(236, 240, 241);"><em>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</em></span></h2>',
        'titulo' => 'DEFECTO / EJEMPLO',
        'texto' => '<h2><em>Caso de estudio</em></h2>
        <h1><strong>DEFECTO / EJEMPLO</strong></h1>
        <h2><em>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</em></h2>',
        'col1' => '<p><img class="mb-3" src="../../assets/front/images/phoenix.svg" alt=""> <img src="../../assets/front/images/teknilogo.svg" alt="" width="296" height="59"></p>
        <div class="mt-3 c_resplandor">
        <h5><strong>Estatus:</strong> On going</h5>
        </div>',
        'col2' => '<h5>INDUSTRIA</h5>
        <p>Empaques</p>
        <h5>UBICACI&Oacute;N</h5>
        <p>Bogot&aacute; y Cartagena,<br>Colombia</p>',
        'col3' => '<p>Estrategia de comunicaci&oacute;n <br>Creaci&oacute;n de campa&ntilde;a <br>Contenido audiovisual <br>Contenido gr&aacute;fico <br>Intervenci&oacute;n de espacios</p>',
        'contexto' => '<h4>CONTEXTO</h4>
        <h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto: <strong style="color: #5b4cff;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</strong> <br><br>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</h5>',
        'img_left' => '',
        'img_right' => '',
        'iframe' => '<p><iframe title="YouTube video player" src="https://www.youtube.com/embed/PF9pso5AAFk" width="100%" height="720" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen"></iframe></p>',
        'mision_img' => '',
        'mision_text' => '<h5>Proponer <strong style="color: #5b4cff;">una estrategia de comunicación y un plan de acción</strong> que acompañe la implementación de contenidos para <strong style="color: #5b4cff;">potenciar</strong> la protección de derechos de la población migrante venezolana, <strong style="color: #5b4cff;">la cohesión comunitaria y la seguridad ciudadana.</strong></h5>',
      ]);
    }
    $this->data['edit'] = $casos;

    return view('cms.content.casos.formulario', $this->data);
  }

  public function store(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);

    // Update model
    if (isset($request->id) && (int)$request->id > 0) {
      $item = Casos::find($request->id);
      $item->fill($data);

      // Save file
      if ($request->imagen_background) {
        $fileName = time() . '_' . $request->imagen_background->getClientOriginalName();
        $url = $request->file('imagen_background')->storeAs('casos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->imagen_background = $file_path;
      }

      // Save file
      if ($request->img_left) {
        $fileName = time() . '_' . $request->img_left->getClientOriginalName();
        $url = $request->file('img_left')->storeAs('casos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_left = $file_path;
      }

      // Save file
      if ($request->img_right) {
        $fileName = time() . '_' . $request->img_right->getClientOriginalName();
        $url = $request->file('img_right')->storeAs('casos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_right = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    } else {
      // Save model
      $item = Casos::create($data);

      // Save file
      if ($request->img_left) {
        $fileName = time() . '_' . $request->img_left->getClientOriginalName();
        $url = $request->file('img_left')->storeAs('casos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_left = $file_path;
      }

      // Save file
      if ($request->img_right) {
        $fileName = time() . '_' . $request->img_right->getClientOriginalName();
        $url = $request->file('img_right')->storeAs('casos', $fileName, 'public');
        $file_path = '/storage/' . $url;
        $item->img_right = $file_path;
      }

      // Set new mesage
      if ($item->save()) {
        $this->alert = 'El registro ha sido actualizado con exito';
      } else {
        $this->alert = 'Hubo un error al actualizar el registro';
      }
    }
  }

  public function edit(Request $request, $cards, $id)
  {
    $this->data['edit'] = Casos::find($id);
    return $this->index($request);
  }

  public function destroy(Request $request, $id)
  {
    // Delete logical fron DB
    Casos::find($id)->delete();

    // Set new mesage
    $this->alert = 'El registro ha sido eliminado con exito';

    return $this->index($request);
  }
}
