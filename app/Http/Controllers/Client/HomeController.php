<?php

namespace App\Http\Controllers\Client;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Categories;
use App\Categoriedetails;
Use App\Shopfoods;
use App\Products;
use DB;

class HomeController extends Controller
{
    function AdminCp(){
        $cates = Categories::all();
        $users = Users::where('role', 0)->get();
        $shops = Shopfoods::all();
        $products = Products::all();

    	return view('admin.admin-cp', ['cates' => $cates, 'users' => $users, 'shops' => $shops, 'products' => $products]);
    }

    function SaveActive(Request $rq){
        $product = Products::find($rq['getId']);
        $product->update(['product_active' => $rq['value']]);
        return response()->json();
    }

   function SaveActiveProduct(Request $rq){
        $product = Products::find($rq['getId']);
        $product->update(['product_active' => $rq['value']]);
    }

    function  AdminShop(){
        return view('admin-shop.index');
    }

    function  ViewShow(){
        return view('view.index');
    }

}
