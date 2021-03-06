<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public  function user(){
		return $this->belongsTo('App\User');
	}

	public function tour(){
    	$this -> belongsTo('App\Tour');
    }

    public function traloi(){
    	return $this -> hasMany('App\Traloi');
    }
	
}
