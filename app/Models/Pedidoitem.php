<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Pedidoitem
 * 
  * @property $id
  * @property $idPedido
  * @property $idCliente
  * @property $idArticulo
  * @property $idProducto
  * @property $aplicacion
  * @property $descripcionCorta
  * @property $cantidad
  * @property $preciolista
  * @property $precioneto
  * @property $preciocategorizado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedidoitem extends Model
{

  use HasFactory;

  protected $table = "pedidositem";
    
    static $rules = [
    'id' => 'requred',
		'idPedido' => 'requred',
		'idCliente' => 'requred',
		'idArticulo' => 'requred',
    'idProducto' => 'requred',
    'aplicacion' => 'requred',
    'descripcionCorta' => 'requred',
		'cantidad' => 'requred',
    'preciolista' => 'requred',
    'precioneto' => 'requred',
    'preciocategorizado' => 'requred'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'idPedido',
      'idCliente',
      'idArticulo',
      'idProducto',
      'aplicacion',
      'descripcionCorta',
      'cantidad',
      'preciolista',
      'precioneto',
      'preciocategorizado'
    ];
  }
