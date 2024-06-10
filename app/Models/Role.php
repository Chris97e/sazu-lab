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
 * Class Role
 * 
 * @property int $id
 * @property string|null $rol
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|FichasHasUsuario[] $fichas_has_usuarios
 * @property Collection|ProyectosHasUsuario[] $proyectos_has_usuarios
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Role extends Model
{
	use SoftDeletes;
	protected $table = 'roles';

	protected $fillable = [
		'rol'
	];

	public function fichas_has_usuarios()
	{
		return $this->hasMany(FichasHasUsuario::class, 'roles_id');
	}

	public function proyectos_has_usuarios()
	{
		return $this->hasMany(ProyectosHasUsuario::class, 'roles_id');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuarios_has_roles', 'roles_id', 'usuarios_id')
					->withPivot('id');
	}
}
