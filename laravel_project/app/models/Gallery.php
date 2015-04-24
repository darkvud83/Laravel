<?php namespace App\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Gallery extends Eloquent  {
    
    
    
    public function artist() {
        
       
       return $this->belongsTo('App\models\Artist');
        
    }
}
