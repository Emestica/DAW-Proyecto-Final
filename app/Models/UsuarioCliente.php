<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioCliente
 * 
 * @property int $id_usuario_cliente
 * @property int $id_usuario
 * @property int $id_cliente
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario_creacion
 * @property string|null $usuario_modificacion
 * 
 * @property Cliente $cliente
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioCliente extends Model
{
	protected $table = 'usuario_cliente';
	protected $primaryKey = 'id_usuario_cliente';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_cliente' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'id_cliente',
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

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
