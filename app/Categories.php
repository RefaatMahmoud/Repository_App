<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name' , 'quantity' , 'price'
    ];
    public function Bill(){
        return $this->belongsTo(Bills::class);
    }
}
