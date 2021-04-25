<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class nationality extends Model
{
    use HasTranslations;

       protected $translatable = ['name'];
}
