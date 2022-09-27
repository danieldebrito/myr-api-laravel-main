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
 * @property $idDescuento
 * @property $utilidadCoeficiente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ClienteDescuento extends Model
{

  use HasFactory;

  protected $table = "cliente_descuentos";
    
    static $rules = [
    'id' => 'required',
    'idCliente' => 'required',
		'idProducto' => 'required',
    'idDescuento' => 'required',
    'utilidadCoeficiente' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'idCliente', 'idProducto', 'idDescuento', 'utilidadCoeficiente'];
  }
