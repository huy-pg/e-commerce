<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAtrr extends Model
{
    protected $table='product_att';
    protected $primaryKey='id';
    protected $fillable=['products_id','sku','size','p_color','price','stock'];
}
