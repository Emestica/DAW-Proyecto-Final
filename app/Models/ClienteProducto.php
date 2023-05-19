<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClienteProducto
 * 
 * @property int $id_cliente_producto
 * @property int $id_cliente
 * @property int $id_producto
 * @property float|null $valor_neto
 * @property float|null $valor_total
 * @property float|null $valor_pagado
 * @property float|null $valor_interes
 * @property float|null $valor_interes_pagado
 * @property float|null $valor_cuota
 * @property int|null $cantidad_meses
 * @property Carbon|null $fecha_inicio
 * @property Carbon|null $fecha_finalizacion_estimada
 * @property Carbon|null $fecha_finalizacion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Cliente $cliente
 * @property Producto $producto
 *
 * @package App\Models
 */
class ClienteProducto extends Model
{
	protected $table = 'cliente_producto';
	protected $primaryKey = 'id_cliente_producto';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_producto' => 'int',
		'valor_neto' => 'float',
		'valor_total' => 'float',
		'valor_pagado' => 'float',
		'valor_interes' => 'float',
		'valor_interes_pagado' => 'float',
		'valor_cuota' => 'float',
		'cantidad_meses' => 'int',
		'fecha_inicio' => 'datetime',
		'fecha_finalizacion_estimada' => 'datetime',
		'fecha_finalizacion' => 'datetime',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_cliente',
		'id_producto',
		'valor_neto',
		'valor_total',
		'valor_pagado',
		'valor_interes',
		'valor_interes_pagado',
		'valor_cuota',
		'cantidad_meses',
		'fecha_inicio',
		'fecha_finalizacion_estimada',
		'fecha_finalizacion',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}
}
