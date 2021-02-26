<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';
    protected $fillable= ['customer_id', 'name', 'phone', 'address', 'status', 'payment_id'];

    public function customer()
    {
    	return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function payment()
    {
    	return $this->hasOne(Payment::class,'id','payment_id');
    }

    public function order_detail()
    {
        return $this->hasMany(Order_detail::class,'order_id','id');
    }
}
