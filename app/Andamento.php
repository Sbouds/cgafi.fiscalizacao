<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Andamento extends Model
{
    protected $table = 'andamentos';
	protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [

    'and_descricao',
    'and_dt_registro',
        
     ];

      public function fiscalizacaos()
    {
        return $this->belongsTo('App\Fiscalizacao');
    }

    public function statuss()
    {
        return $this->belongsTo('App\Status');
    }

    public function penalidades()
    {
        return $this->belongsTo('App\Penalidade');
    }

     public function termoajustecondutas()
    {
        return $this->belongsTo('App\TermoAjusteConduta');
    }
}
