<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomePedido', 'tipo', 'fundamento', 'resumo',
    ];

    public function peticoes()
    {
        return $this->belongsToMany('App\Peticao', 'pedidos_peticoes');
    }
}
