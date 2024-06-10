<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosHasRole
 * 
 * @property int $id
 * @property int|null $usuarios_id
 * @property int|null $roles_id
 * 
 * @property Role|null $role
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class UsuariosHasRole extends Model
{
	protected $table = 'usuarios_has_roles';
	public $timestamps = false;

	protected $casts = [
		'usuarios_id' => 'int',
		'roles_id' => 'int'
	];

	protected $fillable = [
		'usuarios_id',
		'roles_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'roles_id');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id');
	}
}
