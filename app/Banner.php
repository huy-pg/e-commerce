<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    protected $fillable=['title','image','sumary','link','status','prioty'];
}
