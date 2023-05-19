<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OpcionRol
 * 
 * @property int $id_opcion_rol
 * @property int $id_opcion
 * @property int $id_rol
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Opcione $opcione
 * @property Role $role
 *
 * @package App\Models
 */
class OpcionRol extends Model
{
	protected $table = 'opcion_rol';
	protected $primaryKey = 'id_opcion_rol';
	public $timestamps = false;

	protected $casts = [
		'id_opcion' => 'int',
		'id_rol' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_opcion',
		'id_rol',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function opcione()
	{
		return $this->belongsTo(Opcione::class, 'id_opcion');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}
}
