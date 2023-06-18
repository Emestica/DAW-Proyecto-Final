<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioRol
 *
 * @property int $id_usuario_rol
 * @property int $id_usuario
 * @property int $id_rol
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 *
 * @property Role $role
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioRol extends Model
{
	protected $table = 'usuario_rol';
	protected $primaryKey = 'id_usuario_rol';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_rol' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'id_rol',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
