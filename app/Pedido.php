<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function peticoes()
    {
        return $this->belongsToMany('App\Peticao', 'pedidos_peticoes');
    }
}
