<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origem extends Model
{
	protected $table = 'origems';
	protected $primaryKey = 'id';
	public $timestamps = false;
    protected $fillable = [

    'ori_nome',
        
     ];

     public function fiscalizacaos()
    {
        return $this->hasMany('App\Fiscalizacao');
    }
}
