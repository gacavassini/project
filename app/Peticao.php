<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticao extends Model
{
    //recisou disso pq procurava tabela peticaos
    protected $table = 'peticoes';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fatos', 'codCliente', 'codEntrevista',
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
