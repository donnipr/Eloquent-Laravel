<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public function blogger()
    {
    	return $this->belongsTo('App\Blogger'); 
    }
}