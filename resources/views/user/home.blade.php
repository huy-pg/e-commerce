@extends('layouts.user')
@section('title','Home Page')
@section('content')
    <div id="app">
<div><section class="section--homepage" style="padding-top:0 !important">
<x-slider></x-slider>

    </section>
    </div>
    <div><section class="section--homepage home-collection">
    <div class="container">
    <div class="section__header">
    <h3>A change of Season</h3>
    <p>Update your wardrobe with new seasonal trend</p>
    </div>
    <div class="section__content">
    <div class="row">
    <div class="col-md-6 col-sm-12 col-12">
    <div class="collection banner-effect">
    <a href="products5957.html?collections%5B%5D=1">
    <img src="{{asset('assets/storage/product-collections/1-570x570.jpg')}}" alt="New Arrival">
</a>
    <a class="collection__more_link" href="products5957.html?collections%5B%5D=1">New Arrival</a>
    </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12">
    <div class="row">
    <div class="col-md-6 col-12">
    <div class="collection banner-effect">
    <a href="products140f.html?collections%5B%5D=2">
    <img src="{{asset('assets/storage/product-collections/2-570x570.jpg')}}" alt="Best Sellers">
    </a>
    <a class="collection__more_link" href="products140f.html?collections%5B%5D=2">Best Sellers</a>
    </div>
    </div>
    <div class="col-md-6 col-12">
    <div class="collection banner-effect">
    <a href="productsd1dd.html?collections%5B%5D=3">
    <img src="{{asset('assets/storage/product-collections/3-570x570.jpg')}}" alt="Special Offer">
    </a>
    <a class="collection__more_link" href="productsd1dd.html?collections%5B%5D=3">Special Offer</a>
    </div>
    </div>
     </div>
    <div class="collection banner-effect">
    <a href="productsd1dd.html?collections%5B%5D=3">
    <img src="{{asset('assets/storage/product-collections/4-570x268.jpg')}}" alt="Trending Fashion">
    </a>
    <a class="collection__more_link" href="products167f.html?collections%5B%5D=4">Trending Fashion</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    <div><section class="section--homepage home-products">
    <div class="container">
    <div class="section__header">
    <h3>Our Picks For You</h3>
    <p>Always find the best ways for you</p>
    </div>
    <div class="section__content">   <div class="row">
    @foreach($new_products as $np)
      <div class="col-lg-3 col-md-4 col-6">
         <div class="product">
            <div class="product__wrapper">
               <div class="product__thumbnail">
                  <!-- <div class="product__badges">
                     <span class="badge badge--sale">-25%</span>
                  </div> -->
                  <a class="product__overlay" href="{{route('product-detail',['id'=>$np->id])}}"></a>
                  <img src="{{url('products',$np->image)}}" alt="https://hasa.botble.com/products/wallet-handmade">
                  <a class="product__favorite js-add-favorite-button" href="https://hasa.botble.com/wishlist/1">
                  <i class="fa fa-heart-o"></i>
                  </a>
                  <ul class="product__actions">
                     <li><a class="add-to-cart-button" data-id="1" href="{{route('cart.add',['id'=>$np->id])}}">Add to cart</a></li>
                  </ul>
                 
               </div>
               <div class="product__content" data-mh="product-item">
                  <a class="product__title" href="{{route('product-detail',['id'=>$np->id])}}">{{$np->p_name}}</a>
                  <p class="product__price  sale ">
                     <span>${{$np->sale_price}}</span>
                     <del><span>${{$np->price}}</span></del>
                  </p>
                 
               </div>
            </div>
         </div>
      </div>
 @endforeach</div>
    </div>
    </div>
    </section>
    </div>
    <div><section class="section--homepage home-products">
    <div class="container">
    <div class="section__header">
    <h3>Trending Products</h3>
    <p>Products on trending</p>
    </div>
    <div class="section__content">
    <div class="row">
    @foreach($new_products as $np)
      <div class="col-lg-3 col-md-4 col-6">
         <div class="product">
            <div class="product__wrapper">
               <div class="product__thumbnail">
                  <!-- <div class="product__badges">
                     <span class="badge badge--sale">-25%</span>
                  </div> -->
                  <a class="product__overlay" href="{{route('product-detail',['id'=>$np->id])}}"></a>
                  <img src="{{url('products',$np->image)}}" alt="https://hasa.botble.com/products/wallet-handmade">
                  <a class="product__favorite js-add-favorite-button" href="https://hasa.botble.com/wishlist/1">
                  <i class="fa fa-heart-o"></i>
                  </a>
                  <ul class="product__actions">
                     <li><a class="add-to-cart-button" data-id="1" href="{{route('cart.add',['id'=>$np->id])}}">Add to cart</a></li>
                  </ul>
                 
               </div>
               <div class="product__content" data-mh="product-item">
                  <a class="product__title" href="{{route('product-detail',['id'=>$np->id])}}">{{$np->p_name}}</a>
                  <p class="product__price  sale ">
                     <span>${{$np->sale_price}}</span>
                     <del><span>${{$np->price}}</span></del>
                  </p>
                  
               </div>
            </div>
         </div>
      </div>
 @endforeach</div>
    </div>
    </div>
    </section>
    </div>
    <div><section class="section--homepage">
    <div class="container">
    <div class="section__header">
    <h3>Our Brands</h3>
    </div>
   

   <section class="customer-logos slider">
   <div class="row">
   @foreach($brand as $brand)
    <div class="slide"><img src="{{url('uploads/',$brand->image)}}"></div>
    @endforeach</div>
   </section>
  
    </div>
    </section>
    </div>
    <div><section class="section--homepage home-blog">
    <div class="container">
    <div class="section__header">
    <h3>Visit Our Blog</h3>
    <p>Our Blog updated the newest trend of the world regularly</p>
    </div>
    <div class="section__content">
    <news-component url="ajax/posts.json"></news-component>
    </div>
    </div>
    </section>
    </div>
    <div><div class="ps-site-features">
    <div class="container">
    <div class="ps-block--features">
    <div class="row ps-col-tiny">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
    <div class="ps-block--feature">
    <div class="ps-block__left"><i class="feather icon icon-truck"></i></div>
    <div class="ps-block__right">
    <p>FREE SHIPPING</p>
    <small>Free shipping on all US order or order above $200</small>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
    <div class="ps-block--feature">
    <div class="ps-block__left"><i class="feather icon icon-life-buoy"></i></div>
    <div class="ps-block__right">
    <p>SUPPORT 24/7</p>
    <small>Contact us 24 hours a day, 7 days a week</small>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
    <div class="ps-block--feature">
    <div class="ps-block__left"><i class="feather icon icon-refresh-ccw"></i></div>
    <div class="ps-block__right">
    <p>30 DAYS RETURN</p>
    <small>Simply return it within 30 days for an exchange</small>
     </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
    <div class="ps-block--feature">
    <div class="ps-block__left"><i class="feather icon icon-shield"></i></div>
    <div class="ps-block__right">
    <p>100% PAYMENT SECURE</p>
    <small>We ensure secure payment with PEV</small>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>   </div>
 
@endsection