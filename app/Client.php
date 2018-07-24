<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'clientName' , 'address' , 'date'
    ];

    public function Bills(){
        return $this->hasMany(Bills::class);
    }
}
