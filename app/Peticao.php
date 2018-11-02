<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PeticaoCriada;

class Peticao extends Model
{
    //recisou disso pq procurava tabela peticaos
    protected $table = 'peticoes';

    protected $events = [
      'created' => PeticaoCriada::class
    ];

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
        return $this->belongsTo('App\Entrevista', 'codEntrevista', 'codEntrevista');
    }

    public function peticoes_bases(){
      return $this->hasMany('App\PeticaoBase');
    }

    public function peticoes_pedidos(){
      return $this->hasMany('App\PedidoPeticao');
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
