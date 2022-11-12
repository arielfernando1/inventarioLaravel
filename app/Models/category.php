<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//category has many products
class category extends Model
{
    use HasFactory;
    
    /*
    public function products()
    {
        return $this->hasMany('App\Models\product');
    }
    */
}
