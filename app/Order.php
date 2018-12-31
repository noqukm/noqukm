<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	 use Notifiable;
	 use SoftDeletes;
     public $table = 'orders';
     public $dates = ['deleted_at'];
     public function user()
     {
     	return $this->belongsTo('App\User');
     }
}
