<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pasajero
 *
 * @property $id
 * @property $id_bus
 * @property $nombre
 * @property $cedula
 * @property $created_at
 * @property $updated_at
 *
 * @property Bus $bus
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pasajero extends Model
{
    
    static $rules = [
		'id_bus' => 'required',
		'nombre' => 'required',
		'cedula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_bus','nombre','cedula'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bus()
    {
        return $this->hasOne('App\Models\Bus', 'id', 'id_bus');
    }
    

}
