<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'name', 'adrsl1', 'adrsl2','place','pin','email','phone','pickdate','remarks'
    ];
    
}
