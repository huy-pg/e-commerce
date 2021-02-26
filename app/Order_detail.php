<?php

namespace app;


use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table= 'order_detail';
    protected $fillable= ['order_id', 'product_id', 'quantity', 'price','size','color'];
    public $timestamps = false;
    public function order()
    {
    	return $this->hasOne(Order::class,'id','order_id');
    }

    public function product()
    {
    	return $this->hasOne(Product::class,'id','product_id');
    }
}
