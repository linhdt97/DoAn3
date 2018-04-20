<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    protected $table = 'thanhtoan';

    public function bill(){
    	return $this -> belongsTo('App\Bill');
    }
}
