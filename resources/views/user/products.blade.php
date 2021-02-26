@extends('layouts.user')
@section('title','List Products')

@section('content')
<div id="app">
<main class="page--shop">
<div class="page__hero bg--cover" data-background="https://hasa.botble.com/themes/september/img/bg/shop.jpg">
<h1>Enjoy Shopping with us</h1>
</div>
<div class="page__content">
<div class="container">
<div class="shop shop--sidebar">
<div class="container">
<form action="https://hasa.botble.com/products" method="GET">
<div class="shop__header">
<ul class="breadcrumb--custom">
<li><a href="index.html">Home</a></li>
<li class="active">Products</li>
</ul>
<div class="shop__sort">
<div class="form-group--inline">
<label for="sort-by">Sort by</label>
<div class="form-group__content">
<div class="select--arrow">
<select name="sort-by" id="sort-by" class="form-control">
<option value="default_sorting">Default</option>
<option value="date_asc">Oldest</option>
<option value="date_desc">Newest</option>
<option value="price_asc">Price: low to high</option>
<option value="price_desc">Price: high to low</option>
<option value="name_asc">Name: A-Z</option>
<option value="name_desc">Name: Z-A</option>
</select>
<i class="feather icon icon-chevron-down"></i>
</div>
</div>
</div>
</div>
<a class="panel-trigger btn--custom btn--rounded btn--outline" href="#filter-product">Filter Products</a>
</div>
<div class="shop__content">
<div class="shop__left">
<aside class="widget widget--shop">
<h4 class="widget__title">Product Categories</h4>
<div class="widget__content">
<ul class="widget__links list--plus">
<li class="active"><a href="{{url('/list-products')}}">All Products</a></li>
@foreach($categories as $cat)
<li><a href="">{{$cat->name}}</a></li>
@endforeach

</ul>
</div>
</aside>
<aside class="widget widget--shop">
<h4 class="widget__title">Brands</h4>
<div class="widget__content">
<ul class="widget__links list--plus">
<li><a href="brands/fashion-live.html">Fashion live (1)</a></li>

</ul>
</div>
</aside>

<aside class="widget widget--shop">
<h4 class="widget__title">By Price</h4>
<div class="widget__content nonlinear-wrapper">
<div class="nonlinear" data-min="0" data-max="100000"></div>
<div class="ps-slider__meta">
<div data-current-exchange-rate="23203"></div>
<input class="product-filter-item product-filter-item-price-0" name="min_price" value="0" type="hidden">
<input class="product-filter-item product-filter-item-price-1" name="max_price" value="100000" type="hidden">
<span class="ps-slider__value">
<span class="ps-slider__min"></span> VND</span> - <span class="ps-slider__value"><span class="ps-slider__max"></span> VND
</span>
</div>
</div>

<div class="text-swatches-wrapper widget-filter-item" data-type="text">
<h4 class="widget__title">By Size</h4>
<div class="widget-content">
<div class="attribute-values">
<ul class="text-swatch">
<li data-slug="s">
<div>
<label>
<input class="product-filter-item" type="checkbox" name="attributes[]" value="6">
<span>S</span>
</label>
</div>
</li>
<li data-slug="m">
<div>
<label>
<input class="product-filter-item" type="checkbox" name="attributes[]" value="7">
<span>M</span>
</label>
</div>
</li>
<li data-slug="l">
<div>
<label>
<input class="product-filter-item" type="checkbox" name="attributes[]" value="8">
<span>L</span>
</label>
</div>
</li>
<li data-slug="xl">
<div>
<label>
<input class="product-filter-item" type="checkbox" name="attributes[]" value="9">
<span>XL</span>
</label>
</div>
</li>
<li data-slug="xxl">
<div>
<label>
 <input class="product-filter-item" type="checkbox" name="attributes[]" value="10">
<span>XXL</span>
</label>
</div>
</li>
</ul>
</div>
</div>
</div>
</aside>
</div>
<div class="shop__right">
   <div class="shop__products">
      <div class="row">
        @foreach($products as $np)
         <div class="col-md-4 col-6">
            <div class="product">
               <div class="product__wrapper">
                  <div class="product__thumbnail">
                     <!-- <div class="product__badges"><span class="badge badge--sale">-27%</span></div> -->
                     <a href="{{route('product-detail',['id'=>$np->id])}}" class="product__overlay"></a> <img src="{{url('products',$np->image)}}" alt="https://hasa.botble.com/products/wallet-handmade"> <a href="wishlist/1.html" class="product__favorite js-add-favorite-button"><i class="fa fa-heart-o"></i></a> 
                     <ul class="product__actions">
                        <li><a data-id="1" href="{{route('cart.add',['id'=>$np->id])}}" class="add-to-cart-button">Add to cart</a></li>
                     </ul>
                 
                  </div>
                  <div data-mh="product-item" class="product__content">
                     <a href="{{route('product-detail',['id'=>$np->id])}}" class="product__title">{{$np->p_name}}</a> 
                     <p class="product__price  sale "><span>{{$np->price}} ₫</span> <del><span>{{$np->sale_price}} ₫</span></del></p>
                 
                  </div>
               </div>
            </div>
         </div>
     @endforeach
      </div>
      <div class="shop__pagination"></div>
   </div>
</div>

</div>
</form>

</div>
</div>
</div>
</div>
</main>
</div>

@endsection