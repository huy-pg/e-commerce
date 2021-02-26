<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Payment;
use App\Order;
use App\Order_detail;
use App\Helpers\Cart;
use Mail;

class CheckoutController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest');
	}

    public function checkout(Cart $cart)
    {
    
    		$payment = Payment::all();
        	return view('user.checkout',compact('payment'));
    	
    	
    }

    public function checkout_post(Cart $cart)
    {
    	$cus_id = Auth::guard('cus')->user()->id;
    	$cus_name = Auth::guard('cus')->user()->name;
    	$cus_address = Auth::guard('cus')->user()->address;
    	$cus_phone = Auth::guard('cus')->user()->phone;
        $cus_email = Auth::guard('cus')->user()->email;

    	$rule=[
    		'payment'=>'required',
    	];

    	$msg=[
    	];

    	$this->validate(request(),$rule,$msg);
        // dd($cart->items);
    	$order = Order::create([
    		'customer_id'=>$cus_id,
    		'name'=>$cus_name,
    		'payment_id'=>request()->payment,
    		'address'=>$cus_address,
    		'phone'=>$cus_phone,
    	]);
    	if ($order) {
    		$order_id = $order->id;
    		foreach ($cart->items as $item) {
    			$quantity = $item['quantity'];
    			$product_id = $item['id'];
    			$price = $item['price'];
                $size = $item['size'];
                $color = $item['color'];
    			Order_detail::create([
    				'order_id'=>$order_id,
    				'product_id'=>$product_id,
    				'quantity'=>$quantity,
    				'price'=>$price,
                    'size'=>$size,
                    'color'=>$color,
    			]);
    		}

    	};
        Mail::send('email.order',[
            'c_name'=>$cus_name,
            'order'=>$order,
            'items'=>$cart->items,
            'total'=>$cart,
        ],function($mail)use($cus_email)
        {
            $mail->to($cus_email);
            $mail->from('admin@gmail.com');
            $mail->subject('Đặt hàng thành công');
        });
    	session(['cart'=>'']);
    	return view('cart.checkout-success');
    }
   
}
