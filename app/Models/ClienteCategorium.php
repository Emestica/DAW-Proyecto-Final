<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClienteCategorium
 * 
 * @property int $id_cliente_categoria
 * @property int $id_cliente
 * @property int $id_categoria
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Categoria $categoria
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class ClienteCategorium extends Model
{
	protected $table = 'cliente_categoria';
	protected $primaryKey = 'id_cliente_categoria';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_categoria' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_cliente',
		'id_categoria',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'id_categoria');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}
}
