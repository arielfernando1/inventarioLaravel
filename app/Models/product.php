<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    //product has one category
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
