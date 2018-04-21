<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traloi extends Model
{
    protected $table = 'traloi';

    public function comment(){
    	return $this -> belongsTo('App\Comment');
    }

    public function user(){
    	return $this -> belongsTo('App\User');
    }
}
