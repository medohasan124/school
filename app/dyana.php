<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;
class dyana extends Model
{
	 use Notifiable;
    use HasTranslations;

       protected $translatable = ['name'];
}
