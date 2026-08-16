<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    public $timestamps = false;

    protected $appends = ["image_url"];

    public function Product(){
        return $this->belongsTo(Product::class);
    }

    function getImageUrlAttribute(){
        return asset(Storage::url($this->image));
    }
}
