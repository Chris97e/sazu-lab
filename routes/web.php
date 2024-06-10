<?php

use App\Http\Controllers\cms\CmsBaseController;
use App\Http\Controllers\cms\LoginController;
use App\Http\Controllers\cms\SliderController;
use App\Http\Controllers\cms\CardsController;
use App\Http\Controllers\cms\CasosController;
use App\Http\Controllers\cms\EquipoController;
use App\Http\Controllers\cms\ClientesController;
use App\Http\Controllers\cms\ContenidosController;
use App\Http\Controllers\cms\RedController;
use App\Http\Controllers\cms\ImagenController;
use App\Http\Controllers\cms\EnviadosController;
use App\Http\Controllers\cms\ImagenBrandController;
use App\Http\Controllers\cms\ImagenesBrandingController;
use App\Http\Controllers\cms\ParametrosController;
use App\Http\Controllers\cms\ProcesoBrandController;
use App\Http\Controllers\cms\TextosController;
use App\Http\Controllers\cms\TextosUbicaController;
use App\Http\Controllers\cms\ProcesosController;
use App\Http\Controllers\cms\ResultadosController;
use App\Http\Controllers\cms\UbicacionController;
use App\Http\Controllers\cms\UsuariosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\front\EstrategiaController;
use App\Http\Controllers\front\ContenidoController;
use App\Http\Controllers\front\ContactoController;
use App\Http\Controllers\front\BrandingController;
use App\Http\Controllers\front\CaseController;
use App\Http\Controllers\front\FrontBaseController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/geenrale-symbolics-artisan-ruben', function () {
  Artisan::call('storage:link');
});

// Routes for content manager sistem
Route::any('/cms/login', [LoginController::class, 'index'])->name('cms.login');
Route::any('/cms/logout', [LoginController::class, 'logout'])->name('cms.logout');
Route::middleware('verify.cms.login')->prefix('cms')->name('cms.')->group(function () {

  Route::any('/inicio', [CmsBaseController::class, 'index'])->name('inicio');
  Route::redirect('/', url('cms/inicio'));

  // Textos con ubicación
  Route::any('/textos_ubica/{ubicacion}', [TextosUbicaController::class, 'index'])->name('textos_ubica.index');
  Route::any('/textos_ubica/{ubicacion}/destroy/{texto}', [TextosUbicaController::class, 'destroy'])->name('textos_ubica.destroy');
  Route::any('/textos_ubica/{ubicacion}/{texto}/edit', [TextosUbicaController::class, 'edit'])->name('textos_ubica.edit');

  // Casos
  Route::any('/casos/{cards}', [CasosController::class, 'index'])->name('casos.index');
  Route::any('/casos/{cards}/destroy/{casos}', [CasosController::class, 'destroy'])->name('casos.destroy');
  Route::any('/casos/{cards}/{casos}/edit', [CasosController::class, 'edit'])->name('casos.edit');

  // Resultados
  Route::any('/resultados/{cards}', [ResultadosController::class, 'index'])->name('resultados.index');
  Route::any('/resultados/{cards}/destroy/{resultados}', [ResultadosController::class, 'destroy'])->name('resultados.destroy');
  Route::any('/resultados/{cards}/{resultados}/edit', [ResultadosController::class, 'edit'])->name('resultados.edit');

  // Contenidos
  Route::any('/contenidos/{cards}', [ContenidosController::class, 'index'])->name('contenidos.index');
  Route::any('/contenidos/{cards}/destroy/{contenidos}', [ContenidosController::class, 'destroy'])->name('contenidos.destroy');
  Route::any('/contenidos/{cards}/{contenidos}/edit', [ContenidosController::class, 'edit'])->name('contenidos.edit');

  // Procesos
  Route::any('/procesos/{cards}', [ProcesosController::class, 'index'])->name('procesos.index');
  Route::any('/procesos/{cards}/destroy/{procesos}', [ProcesosController::class, 'destroy'])->name('procesos.destroy');
  Route::any('/procesos/{cards}/{procesos}/edit', [ProcesosController::class, 'edit'])->name('procesos.edit');

  // Gestion de usuarios
  Route::any('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
  Route::any('/usuarios/destroy/{usuario}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');
  Route::any('/usuarios/{usuario}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

  // Slider
  Route::any('/slider', [SliderController::class, 'index'])->name('slider.index');
  Route::any('/slider/destroy/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');
  Route::any('/slider/{slider}/edit', [SliderController::class, 'edit'])->name('slider.edit');

  // Cards
  Route::any('/cards', [CardsController::class, 'index'])->name('cards.index');
  Route::any('/cards/destroy/{cards}', [CardsController::class, 'destroy'])->name('cards.destroy');
  Route::any('/cards/{cards}/edit', [CardsController::class, 'edit'])->name('cards.edit');

  // Equipo
  Route::any('/equipo', [EquipoController::class, 'index'])->name('equipo.index');
  Route::any('/equipo/destroy/{equipo}', [EquipoController::class, 'destroy'])->name('equipo.destroy');
  Route::any('/equipo/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipo.edit');

  // Clientes
  Route::any('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
  Route::any('/clientes/destroy/{clientes}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
  Route::any('/clientes/{clientes}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');

  // Imagen
  Route::any('/imagen/{ubicacion}', [ImagenController::class, 'index'])->name('imagen.index');
  Route::any('/imagen/{ubicacion}/destroy/{imagen}', [ImagenController::class, 'destroy'])->name('imagen.destroy');
  Route::any('/imagen/{ubicacion}/{imagen}/edit', [ImagenController::class, 'edit'])->name('imagen.edit');

  // Red
  Route::any('/red', [RedController::class, 'index'])->name('red.index');
  Route::any('/red/destroy/{red}', [RedController::class, 'destroy'])->name('red.destroy');
  Route::any('/red/{red}/edit', [RedController::class, 'edit'])->name('red.edit');

  // Correos Enviados
  Route::any('/enviado', [EnviadosController::class, 'index'])->name('enviado');

  // Imagenes Brand
  Route::any('/imagenbrand', [ImagenBrandController::class, 'index'])->name('imagenbrand.index');
  Route::any('/imagenbrand/destroy/{imagenbrand}', [ImagenBrandController::class, 'destroy'])->name('imagenbrand.destroy');
  Route::any('/imagenbrand/{imagenbrand}/edit', [ImagenBrandController::class, 'edit'])->name('imagenbrand.edit');

  // Parametro
  Route::any('/parametro', [ParametrosController::class, 'index'])->name('inicio');
  Route::any('/parametro/{parametro}/edit', [ParametrosController::class, 'edit'])->name('parametro.edit');

  // Destacados
  Route::any('/imagenes_branding', [ImagenesBrandingController::class, 'index'])->name('imagenes_branding.index');
  Route::any('/imagenes_branding/destroy/{imagenes_branding}', [ImagenesBrandingController::class, 'destroy'])->name('imagenes_branding.destroy');
  Route::any('/imagenes_branding/{imagenes_branding}/edit', [ImagenesBrandingController::class, 'edit'])->name('imagenes_branding.edit');

  // Proceso Brand
  Route::any('/procesobrand', [ProcesoBrandController::class, 'index'])->name('procesobrand.index');
  Route::any('/procesobrand/destroy/{proceso}', [ProcesoBrandController::class, 'destroy'])->name('procesobrand.destroy');
  Route::any('/procesobrand/{proceso}/edit', [ProcesoBrandController::class, 'edit'])->name('procesobrand.edit');

  // Textos
  Route::any('/textos', [TextosController::class, 'index'])->name('textos.index');
  Route::any('/textos/destroy/{texto}', [TextosController::class, 'destroy'])->name('textos.destroy');
  Route::any('/textos/{texto}/edit', [TextosController::class, 'edit'])->name('textos.edit');

  // Ubicacion
  Route::any('/ubicacion', [UbicacionController::class, 'index'])->name('ubicacion.index');
  Route::any('/ubicacion/destroy/{ubicacion}', [UbicacionController::class, 'destroy'])->name('ubicacion.destroy');
  Route::any('/ubicacion/{ubicacion}/edit', [UbicacionController::class, 'edit'])->name('ubicacion.edit');

  // https://laravel.com/docs/9.x/controllers#resource-controllers
});

// Routes for frontend
Route::any('/', [HomeController::class, 'index'])->name('home');
Route::any('/estudio-creativo', [ContenidoController::class, 'index'])->name('estudio-creativo');
Route::any('/estrategia', [EstrategiaController::class, 'index'])->name('estrategia');
Route::any('/branding', [BrandingController::class, 'index'])->name('branding');
Route::any('/identidad-visual', [BrandingController::class, 'index'])->name('identidad-visual');
Route::any('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::any('/gracias', [FrontBaseController::class, 'index']);

// All cases
Route::any('{caso}', [CaseController::class, 'index'])->name('case');
