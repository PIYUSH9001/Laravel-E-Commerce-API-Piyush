<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Laravel\Prompts\error;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::with('ProductImage')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("create-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $product = new Product();
        $product->name = $request->product_name;
        $product->slug = Str::slug($product->name);
        $product->description = $request->product_description;
        $product->category = $request->product_category;
        $product->price = $request->product_price;
        $product->discount_price = $request->product_discount_price;
        $product->stock = $request->product_stock;
        $product->in_stock = $request->boolean("product_in_stock");
        if($product->save()){
            foreach($request->file('product_images') as $image){
                $product_image = new ProductImage();
                $path = $image->store('products');
                $result = Str::after($path,"products/");
                $product_image->image = $result;
                $product_image->product_id = $product->id;
                $product_image->save();
            }
            return ["result"=>"success"];
        }
        else{
            die("Something wrong happened...");
        }       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // Custom functions


    public function GetProductsByCategories(string $category)
    {
        return Product::where("category",$category)->get();
    }
}
