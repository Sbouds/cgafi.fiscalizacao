<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEntidade extends Model
{
	protected $table = 'tipoentidades';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [

    'tent_nome',
        
     ];

     public function entidades()
    {
        return $this->hasMany('App\Entidade');
    }
}
