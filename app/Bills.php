<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [
        'clientName' , 'date' , 'address' , 'category' , 'type' , 'quantity'
    ];
}
