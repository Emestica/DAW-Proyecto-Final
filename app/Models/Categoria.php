<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $id_categoria
 * @property string|null $categoria
 * @property string|null $descripcion
 * @property float|null $porcentaje
 * @property float|null $porcentaje_decimal
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	protected $primaryKey = 'id_categoria';
	public $timestamps = false;

	protected $casts = [
		'porcentaje' => 'float',
		'porcentaje_decimal' => 'float',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'categoria',
		'descripcion',
		'porcentaje',
		'porcentaje_decimal',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function clientes()
	{
		return $this->belongsToMany(Cliente::class, 'cliente_categoria', 'id_categoria', 'id_cliente')
					->withPivot('id_cliente_categoria', 'estado', 'fecha_creacion', 'fecha_modificacion', 'usuario_creacion', 'usuario_modificacion');
	}
}
