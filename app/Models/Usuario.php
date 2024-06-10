<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $correo
 * @property string|null $pass
 * @property string|null $img_foto
 * @property string|null $descripcion
 * @property bool|null $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Comentario[] $comentarios
 * @property Collection|Ficha[] $fichas
 * @property Collection|Proyecto[] $proyectos
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Usuario extends Model
{
	use SoftDeletes;
	protected $table = 'usuarios';

	protected $casts = [
		'estado' => 'bool'
	];

	protected $fillable = [
		'usuario',
		'correo',
		'pass',
		'estado'
	];

  public function roles()
  {
    return $this->belongsToMany(Role::class, 'usuarios_has_roles', 'usuarios_id', 'roles_id')
      ->withPivot('id');
  }

//	public function comentarios()
//	{
//		return $this->hasMany(Comentario::class, 'usuarios_id');
//	}
//
//	public function fichas()
//	{
//		return $this->belongsToMany(Ficha::class, 'fichas_has_usuarios', 'usuarios_id', 'fichas_id')
//					->withPivot('id', 'roles_id');
//	}
//
//	public function proyectos()
//	{
//		return $this->belongsToMany(Proyecto::class, 'proyectos_has_usuarios', 'usuarios_id', 'proyectos_id')
//					->withPivot('id', 'roles_id');
//	}
}
