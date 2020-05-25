<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';

    // relación de muchos a uno
    // public function cliente() {
    // 	return $this->belongsTo('App\cliente', 'cliente_id');
    // }

}