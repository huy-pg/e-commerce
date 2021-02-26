<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table= 'payment';
    protected $fillable= ['name','status'];
}
