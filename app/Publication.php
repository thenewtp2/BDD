<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function wilayas(){
		
		return $this->belongsToMany('App\wilaya','wilaya_id');
	}
}
