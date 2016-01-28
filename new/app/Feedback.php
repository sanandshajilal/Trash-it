<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'phone','message'
    ];

}
