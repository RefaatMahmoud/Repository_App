<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'clientName' , 'address' , 'date'
    ];

    public function Bill(){
        return $this->belongsTo(Bills::class);
    }
}
