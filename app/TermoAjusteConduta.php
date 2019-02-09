<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermoAjusteConduta extends Model
{
    protected $table = 'termoajustecondutas';
	protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [

    'tac_nup',
    'tac_dt_solicitacao_email',
    'tac_dt_assinatura',
    'tac_dt_publ_dou',
    'tac_dt_inicio_vigencia',
    'tac_dt_fim_vigencia',
    'tac_extrato',
    'tac_dou',
        
     ];

     public function andamentos()
    {
        return $this->hasMany('App\Andamento');
    }
}
