<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id_cliente
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $dui
 * @property string|null $nit
 * @property Carbon|null $fecha_nacimiento
 * @property int|null $edad
 * @property string|null $correo_electronico
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Collection|Categoria[] $categorias
 * @property Collection|ClienteDireccion[] $cliente_direccions
 * @property Collection|ClienteNumero[] $cliente_numeros
 * @property Collection|Producto[] $productos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'fecha_nacimiento' => 'datetime',
		'edad' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'dui',
		'nit',
		'fecha_nacimiento',
		'edad',
		'correo_electronico',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function categorias()
	{
		return $this->belongsToMany(Categoria::class, 'cliente_categoria', 'id_cliente', 'id_categoria')
					->withPivot('id_cliente_categoria', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}

	public function cliente_direccions()
	{
		return $this->hasMany(ClienteDireccion::class, 'id_cliente');
	}

	public function cliente_numeros()
	{
		return $this->hasMany(ClienteNumero::class, 'id_cliente');
	}

	public function productos()
	{
		return $this->belongsToMany(Producto::class, 'cliente_producto', 'id_cliente', 'id_producto')
					->withPivot('id_cliente_producto', 'valor_neto', 'valor_total', 'valor_pagado', 'valor_interes', 'valor_interes_pagado', 'valor_cuota', 'cantidad_meses', 'fecha_inicio', 'fecha_finalizacion_estimada', 'fecha_finalizacion', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}

	public function usuarios()
	{
		return $this->belongsToMany(Usuario::class, 'usuario_cliente', 'id_cliente', 'id_usuario')
					->withPivot('id_usuario_cliente', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}
}
