<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [
        'clientId' , 'categoryId' , 'requestedQuantity' , 'total'
    ];

    public function Client(){
        return $this->belongsTo(Client::class);
    }

    public function Categories(){
        return $this->hasMany(Categories::class);
    }
}
