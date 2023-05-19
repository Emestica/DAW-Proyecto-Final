<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clasificacione
 * 
 * @property int $id_clasificacion
 * @property string|null $clasificacion
 * @property string|null $descripcion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Clasificacione extends Model
{
	protected $table = 'clasificaciones';
	protected $primaryKey = 'id_clasificacion';
	public $timestamps = false;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'clasificacion',
		'descripcion',
		'estado',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario_creacion',
		'usuario_modificacion'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_clasificacion');
	}
}
