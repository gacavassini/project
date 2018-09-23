<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codRot', 'rotulo', 'texto',
    ];

    public function peticoes()
    {
        return $this->belongsToMany('App\Peticao', 'peticoes_bases');
    }
}
