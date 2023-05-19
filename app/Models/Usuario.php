<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property string $usuario
 * @property string $contrasenia
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Empleado[] $empleados
 * @property Collection|UsuarioRol[] $usuario_rols
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'usuario',
		'contrasenia',
		'estado',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function clientes()
	{
		return $this->belongsToMany(Cliente::class, 'usuario_cliente', 'id_usuario', 'id_cliente')
					->withPivot('id_usuario_cliente', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}

	public function empleados()
	{
		return $this->belongsToMany(Empleado::class, 'usuario_empleado', 'id_usuario', 'id_empleado')
					->withPivot('id_usuario_empleado', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}

	public function usuario_rols()
	{
		return $this->hasMany(UsuarioRol::class, 'id_usuario');
	}
}
