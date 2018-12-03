<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 //Table Name 
 public $table ='products';
 //Primary Key 
 public $primaryKey ='id';
 //Timestamps 
 public $timestamps = true; 

 public function staff(){
     return $this->belongsTo('App\Staff');

 }
}
