<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property int $id_rol
 * @property string|null $rol
 * @property string|null $descripcion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 *
 * @property Collection|UsuarioRol[] $usuario_rols
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'rol',
		'descripcion',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function usuario_rols()
	{
		return $this->hasMany(UsuarioRol::class, 'id_rol');
	}
}
