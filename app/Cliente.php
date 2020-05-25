<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    // OneToMany
    // public function tipo(){
    // 	return $this->hasMany('App\Contrato');
    // }

    public function tipo() {
    	return $this->belongsTo('App\Contrato', 'tipo_id');
    }


}

