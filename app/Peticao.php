<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticao extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fatos',
    ];

    public function entrevista()
    {
        return $this->hasOne('App\Entrevista');
    }

    public function bases()
    {
        return $this->belongsToMany('App\Base', 'peticoes_bases');
    }

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedidos_peticoes');
    }
}
