<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Category;
use App\ImageGallery;
use App\ProductAtrr;
use App\Product;
use App\Brand;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $new_products= Product::orderBy('created_at','DESC')->limit(4)->get();
        $brand=Brand::all();
        $categories = Category::all();
        return view('user.home',compact('new_products','brand','categories'));
    }
    public function shop(){
        $products=Product::all();
        $categories=Category::all();
        $byCate="";
        return view('user.products',compact('products','byCate','categories'));
    }
    public function listByCat($id){
        $list_product=Product::where('categories_id',$id)->get();
        $byCate=Category::select('name')->where('id',$id)->first();
            $cat=Category::all();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detialpro($id){
        $categories=Category::all();
        $detail_product=Product::findOrFail($id);
        $sku=ProductAtrr::where('products_id',$id);
        $imagesGalleries=ImageGallery::where('products_id',$id)->get();
        $totalStock=ProductAtrr::where('products_id',$id)->sum('stock');
        $relateProducts=Product::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('user.product_details',compact('detail_product','sku','categories','imagesGalleries','totalStock','relateProducts'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
}
