<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalidade extends Model
{
    protected $table = 'penalidades';
	protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [

    'pen_nome',
    'pen_grau',
    'pen_dt_inicio',
    'pen_dt_fim'
        
     ];

     public function andamentos()
    {
        return $this->hasMany('App\Andamento');
    }
}
