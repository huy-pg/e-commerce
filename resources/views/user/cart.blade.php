@extends('layouts.user')
@section('title','Cart Page')

@section('content')

<main class="page--inner">
    <div class="container">
    <section class="section section--shopping-cart">
    @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
    <div class="section__header">
    <h3>Shopping Cart</h3>
    </div>
    <div class="section__content">
     
    <div class="table-responsive">
    <table class="table table--cart">
    <thead>
    <tr>
    <th>Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Sub total</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($cart->items as $item )
    <tr>
    <td>
    <div class="product--cart">
    <div class="product__thumbnail">
    <a href="" class="product__overlay">
    <img src="{{url('products',$item['image'])}}" width="50" />
    </a>
    </div>
    </div>
    </td>
    <td>
    <div class="product__content">
    <a href="" title="">{{$item['p_name']}}</a>
    <p>
     <small>(Color: Red, Size: S)</small>
    </p>
    </div>
    </td>
    <td>
    <span class="product-price-amount amount">
    <span class="currency-sign">
    <strong>${{number_format($item['price'])}}</strong>
    </span>
    </span>
    </td>
    <td>
    <form action="{{route('cart.update',['id'=>$item['id']])}}" method="get">
    <input type="number" name="quantity" id="" value="{{$item['quantity']}}" min="0" step="1"class="form-control"style="width:100px;">
    <input type="submit"class="btn btn-primary" value="update">
    </form>
    </td>
<td>

    <span class="product-price-amount amount">
    <span class="currency-sign">
    <strong>${{number_format($item['price']*$item['quantity'])}}</strong>
    </span>
    <input type="hidden" name="" value="">
    </span>
    </td>
    <td>
    <a href="{{route('cart.remove', ['id'=>$item['id']])}}" class="btn--remove remove-cart-button"><i class="feather icon icon-trash-2"></i></a>
    </td>
    </tr>
    </tr>    @endforeach
    <tr class="sub-total">
    <td colspan="4">
    <h5>Total</h5>
    </td>
    <td>
    <h5>${{number_format($cart->total_price)}} </h5>
    </td>
    <!-- <tr class="sub-total">
    <td colspan="4">
    <h5>Tax</h5>
    </td>
    <td>
    <h5 class="promotion-discount-amount-text">$32.96</h5>
    </td>
    </tr>
    <tr class="total">
    <td colspan="4"><strong>Total</strong> <br /> <span>(Shipping fees not included)</span></td>
    <td class="total__price product-subtotal">
    <span class="amount">$362.60</span>
    </td>
    </tr> -->

    </tbody>
    </table>
    </div>
    </div>
    <div class="form__submit text-right">
 
    </div>
    <a class="btn btn-primary" href="{{route('cart.checkout')}}">Check out</a>
    <section class="section--related-posts" style="border: none; padding-top: 60px;">
    <div class="section__header text-left" style="padding-bottom: 0">
    <h3>Customers who bought this item also bought:</h3>
    </div>
    <div class="section__content">
    <div class="row">
    <div class="col-lg-3 col-md-4 col-6">
    <div class="product">
    <div class="product__wrapper">
    <div class="product__thumbnail">
    <div class="product__badges">
    <!-- <span class="badge badge--sale">-28%</span> -->
    </div>
    <a class="product__overlay" href="https://hasa.botble.com/products/joan-mini-camera-bag"></a>
    <img src="https://hasa.botble.com/storage/products/7-a-570x570.jpg" alt="https://hasa.botble.com/products/joan-mini-camera-bag" />
    <a class="product__favorite js-add-to-wishlist-button" href="https://hasa.botble.com/wishlist/5">
    <i class="fa fa-heart-o"></i>
    </a>
    <ul class="product__actions">
    <li><a class="add-to-cart-button" data-id="5" href="https://hasa.botble.com/cart/add-to-cart">Add to cart</a></li>
    </ul>
 
    </div>
    <div class="product__content" data-mh="product-item">
    <a class="product__title" href="https://hasa.botble.com/products/joan-mini-camera-bag">Joan Mini Camera Bag</a>
    <p class="product__price  sale ">
    <span>$64.80</span>
    <del><span>$90.00</span></del>
    </p>
  
    </div>
    </div>
    </div>
    </div>
  
   
    </div>
    </div>
    </section>
    </div>
    </section>
    </div>
    </main>

  
@endsection