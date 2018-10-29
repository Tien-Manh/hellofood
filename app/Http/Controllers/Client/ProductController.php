<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
Use App\Shopfoods;
use App\Categoriedetails;
use App\Products;
use DB;
class ProductController extends Controller
{
    function ShowProduct(){
    	$products = Products::all();
    	return view('admin.admin-products', ['products' => $products]);
    }

    function ShowListPr($slug){
    	$slug = Shopfoods::where('shopfood_slug', $slug)->firstOrFail();
    	$slug = $slug->id;
    	$products = DB::table('shopfoods')->join('shop_key_product', 'shopfoods.id',
            '=', 'shop_key_product.shopfood_id')->join('categories', 'shop_key_product.categorie_id',
            '=', 'categories.id')->join('products', 'products.id',
            '=', 'shop_key_product.product_id')->where('shop_key_product.shopfood_id', $slug)->get();
    	return view('admin.ajax.productlist-shop', ['products' => $products]);
    }

    function removeProduct(Request $rq){
        $product = Products::find($rq['getId']);
        $product->delete();
        return response()->json();
    }

}
