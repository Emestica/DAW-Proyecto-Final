<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClienteDireccion
 * 
 * @property int $id_cliente_direccion
 * @property int $id_cliente
 * @property string|null $direccion
 * @property string|null $municipio
 * @property string|null $departamento
 * @property string|null $pais
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class ClienteDireccion extends Model
{
	protected $table = 'cliente_direccion';
	protected $primaryKey = 'id_cliente_direccion';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_cliente',
		'direccion',
		'municipio',
		'departamento',
		'pais',
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
}
