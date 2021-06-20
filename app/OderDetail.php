<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OderDetail extends Model
{
    protected $table = "oderdetail";
   
    public function oder()
    {
        return $this->belongsTo('App\Oder','id_oder','id');
    }
    public function getParentProduct()
    {
        return $this->hasOne(Product::class,'product_id','id_prod');
    }
    
}
