<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public function product()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function oderdetail()
    {
        return $this->hasMany('App\OderDetail','id_prod','id');
    }
}
