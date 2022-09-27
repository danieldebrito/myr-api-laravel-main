<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedidoitem
 *
 * @property $id
 * @property $idCliente
 * @property $idProducto
 * @property $coeficiente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ClienteUtilidad extends Model
{

  use HasFactory;

  protected $table = "cliente_utilidades";
    
    static $rules = [
    'id' => 'required',
    'idCliente' => 'required',
		'idProducto' => 'required',
    'coeficiente' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'idCliente', 'idProducto', 'coeficiente'];
  }
