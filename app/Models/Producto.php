<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedidoitem
 *
 * @property $id
 * @property $id_producto
 * @property $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

  use HasFactory;

  protected $table = "productos";
    
    static $rules = [
    'id' => 'required',
    'id_producto' => 'required',
		'producto' => 'required',
    'idDescuento' => 'required',
    'activo' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'id_producto', 'producto', 'idDescuento', 'activo'];
  }
