<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $id
 * @property $origenN
 * @property $destinoN
 * @property $distancia
 * @property $tarifa
 * @property $created_at
 * @property $updated_at
 *
 * @property Bus[] $buses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    static $rules = [
		'origenN' => 'required',
		'destinoN' => 'required',
		'distancia' => 'required',
		'tarifa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['origenN','destinoN','distancia','tarifa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buses()
    {
        return $this->hasMany('App\Models\Bus', 'id_ruta', 'id');
    }
    

}
