<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property int $id_empleado
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property Carbon|null $fecha_nacimiento
 * @property int|null $edad
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $celular
 * @property string|null $correo_electronico_personal
 * @property string|null $correo_electronico_institucional
 * @property string|null $dui
 * @property string|null $nit
 * @property Carbon|null $fecha_ingreso
 * @property Carbon|null $fecha_salida
 * @property string|null $area_trabajo
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 *
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleados';
	protected $primaryKey = 'id_empleado';
	public $timestamps = false;

	protected $casts = [
		'fecha_nacimiento' => 'datetime',
		'edad' => 'int',
		'fecha_ingreso' => 'datetime',
		'fecha_salida' => 'datetime',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'fecha_nacimiento',
		'edad',
		'direccion',
		'telefono',
		'celular',
		'correo_electronico_personal',
		'correo_electronico_institucional',
		'dui',
		'nit',
		'fecha_ingreso',
		'fecha_salida',
		'area_trabajo',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuario_empleado', 'id_empleado', 'id_usuario')
					->withPivot('id_usuario_empleado', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}
}
