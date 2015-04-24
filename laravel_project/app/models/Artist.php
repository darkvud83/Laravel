<?php namespace App\models;
use DB;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class Artist extends Eloquent {
    
    protected $table = 'artists';
    
    protected $guarded = array('id');
    
  public function galleries() {
      
      
      return $this->hasMany('App\models\Gallery');
      
  }
  
  public function get_galleries() {
      
    $image = DB::table('artists')->join('galleries', 'artists.id', '=', 'galleries.artist_id')
                        ->select('artists.name', 'artists.contact', 'artists.email', 'galleries.url', 'galleries.pricing', 'galleries.title', 'galleries.artist_id')->paginate(3);
      return $image;
  }
        
    }
  
