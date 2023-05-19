<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_producto
 * @property int $id_clasificacion
 * @property string|null $descripcion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Clasificacione $clasificacione
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'id_clasificacion' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_clasificacion',
		'descripcion',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function clasificacione()
	{
		return $this->belongsTo(Clasificacione::class, 'id_clasificacion');
	}

	public function clientes()
	{
		return $this->belongsToMany(Cliente::class, 'cliente_producto', 'id_producto', 'id_cliente')
					->withPivot('id_cliente_producto', 'valor_neto', 'valor_total', 'valor_pagado', 'valor_interes', 'valor_interes_pagado', 'valor_cuota', 'cantidad_meses', 'fecha_inicio', 'fecha_finalizacion_estimada', 'fecha_finalizacion', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}
}
