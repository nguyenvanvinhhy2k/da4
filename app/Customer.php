<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public function oder()
    {
        return $this->hasMany('App\Oder','id_customer','id');
    }
    
}

