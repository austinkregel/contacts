<?php

namespace Kregel\Contacts\Models;
use Eloquent;
class Contact extends Eloquent
{

    public $fillable = [
        'name',
        'phone_number',
        'email'
    ];

}