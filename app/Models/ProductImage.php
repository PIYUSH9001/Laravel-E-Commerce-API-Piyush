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

    public function getImageUrlAttribute()
{
    return config('services.supabase.url')
        . '/storage/v1/object/public/'
        . config('services.supabase.bucket')
        . '/products/'
        . $this->image;
}
}
