<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = ['email',];

}
