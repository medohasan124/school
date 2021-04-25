<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class bloode extends Model
{
	 use Notifiable;
     

       protected $fillable = ['name'];
}
