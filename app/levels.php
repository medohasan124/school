<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Notifications\Notifiable;
class levels extends Model
{
         use HasTranslations;
           use Notifiable;

       protected $translatable = ['name'];
       protected $fillable = ['grade_id'];
}
