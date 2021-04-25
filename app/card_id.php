<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class card_id extends Model
{
    use Notifiable;

    protected $fillable = ['parent_card_id'];
}
