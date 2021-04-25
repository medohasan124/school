<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class attachment extends Model
{
    use Notifiable;
     
    protected $fillable = ['image_name' , 'parent_id'];
}
