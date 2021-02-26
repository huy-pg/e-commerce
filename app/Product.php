<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $products = 'products';
    protected $fillable = [
        'id',
        'categories_id',  
        'p_name',
        'p_code',
        'price',
        'sale_price',
        'sumary',
        'description',
        'image',  
        'created_at',
        'updated_at',  
    ];
    public function category(){
        return $this->belongsTo(Category::class,'categories_id','id');
    }
    public function attributes(){
        return $this->hasMany(ProductAtrr::class,'products_id','id');
    }
}
