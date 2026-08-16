<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ProductImage(){
        return $this->hasMany(ProductImage::class);
    }
}
