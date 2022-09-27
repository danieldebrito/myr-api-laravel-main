<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Pedidoitem
 *
 * @property $id
 * @property $descripcion
 * @property $coeficiente
 * @property $habilitado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descuento extends Model
{

  use HasFactory;

  protected $table = "descuentos";
    
    static $rules = [
    'id' => 'required',
		'descripcion' => 'required',
		'coeficiente' => 'required',
    'habilitado' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','descripcion','coeficiente', 'habilitado'];
  }
