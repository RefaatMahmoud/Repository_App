<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [
        'clientId' , 'categoryId' , 'requestedQuantity' , 'total'
    ];
}
