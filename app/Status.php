<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'statuss';
	protected $primaryKey = 'id';
	public $timestamps = false;
    protected $fillable = [

    'st_nome',
        
     ];

     public function andamentos()
    {
        return $this->hasMany('App\Andamento');
    }
}
