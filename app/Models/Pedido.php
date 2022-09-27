<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
  * Class Pedidoitem
  * 
  * @property $id
  * @property $idCliente
  * @property $idSucursal
  * @property $idExpreso
  * @property $estado
  * @property $fechaHora
  * @property $observaciones
  * @package App
  * @mixin \Illuminate\Database\Eloquent\Builder
  */
  
class Pedido extends Model
{

  use HasFactory;

  protected $table = "pedidos";
    
    static $rules = [
    'id' => 'requred',
		'idCliente' => 'requred',
		'idSucursal' => 'requred',
		'idExpreso' => 'requred',
    'estado' => 'requred',
    'fechaHora' => 'required',
    'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $fillable = [
      'id',
      'idCliente',
      'idSucursal',
      'idExpreso',
      'estado',
      'fechaHora',
      'observaciones',
    ];
  }
