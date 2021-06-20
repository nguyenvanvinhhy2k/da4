<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey  = 'product_id';
    protected $guest = [];
    public function cate()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
