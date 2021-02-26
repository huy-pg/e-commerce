<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Helpers\Cart;
use App\Order;
use App\Order_detail;
use App\Category;
use Auth;

class CartController extends Controller
{
   public function add($id,Cart $cart){
      $product=Product::find($id);
$cart->add($product);
return redirect()->route('cart.view');
   }
   public function checkout(Cart $cart){
      
return view('user.checkout');
   }
   
   public function post_checkout(Request $request,Cart $cart){
      $cus_id = Auth::guard('web')->user()->id;
      $cus_name = Auth::guard('web')->user()->name;
      $cus_address = Auth::guard('web')->user()->address;
      $cus_phone = Auth::guard('web')->user()->phone;
       $cus_email = Auth::guard('web')->user()->email;
       $payment =request()->payment_method;
      
       $rule=[
         'payment'=>'required',
      ];

      $msg=[
      ];      
      $order = Order::create([
         'customer_id'=>$cus_id,
         'name'=>$cus_name,
         'payment_id'=>$payment,
         'address'=>$cus_address,
         'phone'=>$cus_phone,	]);
   
      $this->validate(request(),$rule,$msg);
   
   
   }



   
    
   public function cart_view(Cart $cart){


    $categories=Category::all();
return view('user.cart',compact('cart','categories'));
   }
   public function remove($id, Cart $cart){
      $cart->remove($id);
      return redirect()->back();
}public function update(Cart $cart,$id)
{
 $quantity =request('quantity') ? (int)request('quantity')  :1;

   $cart->update($id,$quantity);
   return redirect()->back();
}


}
