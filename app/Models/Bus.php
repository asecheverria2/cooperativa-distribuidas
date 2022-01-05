<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bus
 *
 * @property $id
 * @property $placa
 * @property $capacidad
 * @property $id_ruta
 * @property $created_at
 * @property $updated_at
 *
 * @property Pasajero[] $pasajeros
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bus extends Model
{
    
    static $rules = [
		'placa' => 'required',
		'capacidad' => 'required',
		'id_ruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placa','capacidad','id_ruta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pasajeros()
    {
        return $this->hasMany('App\Models\Pasajero', 'id_bus', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id', 'id_ruta');
    }
    

}
