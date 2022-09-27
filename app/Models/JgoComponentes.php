<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedidoitem
 *
 * @property $id
 * @property $codigoMeyroJuego
 * @property $idMaterial
 * @property $idArticuloComponente
 * @property $cantidadPorJuego
 * @property $aplicacionEspecifica 
 * @property $incluidoJgo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class JgoComponentes extends Model
{

  use HasFactory;

  protected $table = "jgos_componentes";
    
    static $rules = [
    'id' => 'required',
    'codigoMeyroJuego' => 'required',
    'idMaterial' => 'required',
    'idArticuloComponente' => 'required',
    'cantidadPorJuego' => 'required',
    'aplicacionEspecifica' => 'required',
    'incluidoJgo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'codigoMeyroJuego', 'idMaterial', 'idArticuloComponente', 'cantidadPorJuego', 'aplicacionEspecifica', 'incluidoJgo'];
  }
