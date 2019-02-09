<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FiscalResponsavel extends Model
{
	protected $table = 'fiscalresponsavels';
	protected $primaryKey = 'id';
	public $timestamps = false;
    protected $fillable = [

    'fr_nome',
        
     ];

     public function fiscalizacaos()
    {
        return $this->hasMany('App\Fiscalizacao');
    }
}
