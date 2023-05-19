<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Opcione
 * 
 * @property int $id_opcion
 * @property int|null $id_opcion_padre
 * @property string|null $opcion
 * @property string|null $descripcion
 * @property string|null $tipo_opcion
 * @property string|null $imagen
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Opcione|null $opcione
 * @property Collection|OpcionRol[] $opcion_rols
 * @property Collection|Opcione[] $opciones
 *
 * @package App\Models
 */
class Opcione extends Model
{
	protected $table = 'opciones';
	protected $primaryKey = 'id_opcion';
	public $timestamps = false;

	protected $casts = [
		'id_opcion_padre' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_opcion_padre',
		'opcion',
		'descripcion',
		'tipo_opcion',
		'imagen',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function opcione()
	{
		return $this->belongsTo(Opcione::class, 'id_opcion_padre');
	}

	public function opcion_rols()
	{
		return $this->hasMany(OpcionRol::class, 'id_opcion');
	}

	public function opciones()
	{
		return $this->hasMany(Opcione::class, 'id_opcion_padre');
	}
}
