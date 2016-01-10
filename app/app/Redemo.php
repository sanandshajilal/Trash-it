<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redemo extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'name', 'itemname'
    ];
}
