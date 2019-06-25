<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;

class TipoRopa extends Model
{
	public function getRouteKeyName()
    {
	    return 'slug';
	}
	protected $fillable = ['name'];

	public function pokemons(){
		return $this->hasMany('Inventario\Ropa');
	}
}
