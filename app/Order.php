<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
	 use Notifiable;

     public $table = 'orders';

     public function user()
     {
     	return $this->belongsTo('App\User');
     }
}
