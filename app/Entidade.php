<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    protected $table = 'entidades';
	protected $primaryKey = 'id';
    protected $foreignKey = 'tipoentidade_id';
    
    public $timestamps = false;
    protected $fillable = [


    'ent_nome'
	];

	 public function tipoentidades()
    {
        return $this->belongsTo('App\TipoEntidade');
    }

     public function fiscalizacaos()
    {
        return $this->hasMany('App\Fiscalizacao');
    }
}

