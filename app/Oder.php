<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Oder extends Model
{
    protected $table = "oder";
    public function oderdetail()
    {
        return $this->hasMany('App\Oderdetail','id_oder','id');
    }
    public function oder()
    {
        return $this->belongsTo('App\Customer','id_customer','id');
    }
    public function getCustomer()
    {
        return $this->hasOne(Customer::class,'id','id_customer');
    }
    public function getOderDetail()
    {
        return $this->belongsTo(OderDetail::class,'id','id_oder');
    }
    
}
