<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiscalizacao extends Model
{

	protected $table = 'fiscalizacaos';
	protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [

    'fisc_nup',
    'fisc_dt_inicio',
    'fisc_dt_prorrogacao',
        
     ];

    public function entidades()
    {
        return $this->belongsTo('App\Entidade');
    }

     public function fiscalresponsavels()
    {
        return $this->belongsTo('App\FiscalResponsavel');
    }

    public function origems()
    {
        return $this->belongsTo('App\Origem');
    }

    public function andamentos()
    {
        return $this->hasMany('App\Andamento');
    }
}
