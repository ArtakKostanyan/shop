<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Product;
use DB;
class SiteController extends Controller
{
    //



    public function index(){

 
$products = Product::select('products.*','categorys.title','categorys.parent_id')->leftJoin('categorys','products.cat_id','=','categorys.id')
                    ->get();

    //	$products = DB::table('products')
           // ->leftJoin('categorys', 'categorys.id', '=', 'products.cat_id')
            //->select('products.id','categorys.*')
            // ->where('products.cat_id', '=', 'categorys.id')
        //    ->get();

    	//$products=Product::all();

 

 // foreach ($products as $key => $value) {
 // 	# code...
 // echo $value->title;
 // }
// dd($products);


 
  
    	return view('index',['products'=>$products]);

    }


}
