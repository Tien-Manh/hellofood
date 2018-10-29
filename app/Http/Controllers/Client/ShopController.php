<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
Use App\Shopfoods;
use App\Categoriedetails;

class ShopController extends Controller
{
    function ShopList(){
        $shop = Shopfoods::all();
        return view('admin.admin-shop', ['shop' => $shop]);
    }
    function removeShop(Request $rq){
        $shop = Shopfoods::find($rq['getId']);
        $shop->delete();
        return response()->json();
    }
    function shopListActive(Request $rq){
        $shop = Shopfoods::find($rq['getId']);
        $shop->update(['shopfood_active' => $rq['value']]);
        return response()->json();
    }
}
