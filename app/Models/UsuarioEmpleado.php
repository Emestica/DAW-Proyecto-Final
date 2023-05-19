<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioEmpleado
 * 
 * @property int $id_usuario_empleado
 * @property int $id_usuario
 * @property int $id_empleado
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Empleado $empleado
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioEmpleado extends Model
{
	protected $table = 'usuario_empleado';
	protected $primaryKey = 'id_usuario_empleado';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_empleado' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'id_empleado',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'id_empleado');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
