@extends('layouts.user')
@section('title','Detial Page')

@section('content')
<div id="app">
    <main class="page--inner page--product--detail">
    <div class="container">
    <ul class="breadcrumb--custom">
    <li><a href="../index.html">Home</a></li>
    <li class="active">{{$detail_product->p_name}}</li>
    </ul>
    <article class="product--detail">
    <div class="product__header">
    <div class="product__thumbnail">
    <figure>
    <div class="wrapper">
    <div class="product__gallery" data-arrow="true">
@foreach($imagesGalleries as $img)
    <div class="item">
    <img src="{{url('products',$img->image)}}"  >
    </div>
    @endforeach
    </div>
    </div>
    </figure>
    <div class="product__variants product__thumbs" data-vertical="true" data-item="5" data-md="3" data-sm="3" data-arrow="false">
    @foreach($imagesGalleries as $img)
  <div class="item">
    <img src="{{url('products',$img->image)}}" />
    </div>    @endforeach

   
    </div>
    </div>
    <div class="product__info">
    <div class="product__info-header">
    <h2 class="product__title">{{$detail_product->p_name}}</h2> ( @if($totalStock>0)
    <span id="is-out-of-stock"><span class="text-success">In stock</span></span>
                            @else
                            <span id="is-out-of-stock"><span class="text-danger">Out stock</span></span>
                            @endif)
    </div>
    <div>
    <div>
    SKU: <span id="product-sku" class="sku" itemprop="sku">{{$detail_product->p_code}}</span> 
    
 
    </div>
    </div>
    <div class="product__price  sale ">
    <p>
    <span class="product-sale-price-text">{{$detail_product->sale_price}} $</span>
    <small><del class="product-price-text">{{$detail_product->price}} $</del></small>
    </p>
    <p>
    <a class="product__add-wishlist add-to-wishlist-button" href="../wishlist/7.html"><i class="fa fa-heart-o"></i>
    <span>Add to wishlist</span>
    </a>
    </p>
    </div>
    <div class="product__desc">
    <p><p>Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.</p></p>
    </div>
    <div class="product__shopping">
    <div class="row">
    <div class="col-sm-12 col-12">
    <div class="product-attributes" data-target="the-marc-jacobs.html">
    <div class="visual-swatches-wrapper attribute-swatches-wrapper form-group product__attribute product__color" data-type="visual">
    <label class="attribute-name">Color</label>
    <div class="attribute-values">
    <ul class="visual-swatch color-swatch attribute-swatch">
    <li data-slug="green" class="attribute-swatch-item" data-toggle="tooltip" data-placement="top" title="Green">
    <div class="custom-radio">
    <label>
    <input class="form-control product-filter-item" type="radio" name="attribute_color" value="1">
    <span style="background-color: #5FB7D4;"></span>
    </label>
    </div>
    </li>
    
    </ul>
    </div>
    </div>
     <div class="text-swatches-wrapper attribute-swatches-wrapper attribute-swatches-wrapper form-group product__attribute product__color" data-type="text">
    <label class="attribute-name">Size</label>
    <div class="attribute-values">
    <ul class="text-swatch attribute-swatch color-swatch">
    <li data-slug="xl" class="attribute-swatch-item">
    <div>
    <label>
    <input class="product-filter-item" type="radio" name="attribute_size" value="9" checked>
    <span>XL</span>
    </label>
    </div>
    </li>
   
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <form class="single-variation-wrap add-to-cart-form" method="POST" action="https://hasa.botble.com/cart/add-to-cart">
    <input type="hidden" name="_token" value="o4oxR9ptCP155akconquPTCph0zYvvB0Dgqlg86q"> <input type="hidden" name="id" id="hidden-product-id" value="30" />
    <div class="form-group product__attribute product__qty">
    <label for="qty-input">Qty</label>
    <div class="form-group__content">
    <div class="form-group--number">
    <button type="button" class="up"></button>
    <input class="form-control qty-input" name="qty" type="number" value="1" id="qty-input">
    <button type="button" class="down"></button>
    </div>
    <div class="float-right number-items-available" style="display: none; line-height: 45px;"></div>
    </div>
    </div>
    <button type="submit" id="btn-add-cart" class="btn--custom btn--fullwidth btn--outline btn--rounded ">
    Add to cart
    </button>
    <div class="success-message text-success text-center" style="display: none;">
    <span></span>
    </div>
    <div class="error-message text-danger text-center" style="display: none;">
    <span></span>
    </div>
    </form>
    </div>
    
    <figure class="product__sharing">
    <figcaption>Share:</figcaption>
    <ul class="list--social">
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fhasa.botble.com%2Fproducts%2Fthe-marc-jacobs&amp;title=<p>Short%20Hooded%20Coat%20features%20a%20straight%20body,%20large%20pockets%20with%20button%20flaps,%20ventilation%20air%20holes,%20and%20a%20string%20detail%20along%20the%20hemline.</p>" target="_blank" title="Share on Facebook"><i class="feather icon icon-facebook"></i></a></li>
    <li><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fhasa.botble.com%2Fproducts%2Fthe-marc-jacobs&amp;text=<p>Short%20Hooded%20Coat%20features%20a%20straight%20body,%20large%20pockets%20with%20button%20flaps,%20ventilation%20air%20holes,%20and%20a%20string%20detail%20along%20the%20hemline.</p>" target="_blank" title="Share on Twitter"><i class="feather icon icon-twitter"></i></a></li>
    <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhasa.botble.com%2Fproducts%2Fthe-marc-jacobs&amp;summary=<p>Short%20Hooded%20Coat%20features%20a%20straight%20body,%20large%20pockets%20with%20button%20flaps,%20ventilation%20air%20holes,%20and%20a%20string%20detail%20along%20the%20hemline.</p>&amp;source=Linkedin" title="Share on Linkedin" target="_blank"><i class="feather icon icon-linkedin"></i></a></li>
    </ul>
    </figure>
    </div>
    </div>
    <div class="product__content tab-root">
    <ul class="tab-list">
    <li class="active"><a href="#tab-description">Description</a></li>
   
    </ul>
    <div class="tabs">
    <div class="tab active" id="tab-description">
    
    <div class="document">
        
    </div>
    <section class="section--related-posts">
    <div class="section__header">
    <h3>Related Products:</h3>
    </div>
    <div class="section__content">
    <div class="row">
    
   
    <div class="col-lg-3 col-md-4 col-6">
    <div class="product">
    <div class="product__wrapper">
    <div class="product__thumbnail">
    <div class="product__badges">
    <span class="badge badge--sale">-12%</span>
    </div>
    <a class="product__overlay" href="snapshot-standard.html"></a>
    <img src="../storage/products/7-a-570x570.jpg" alt="https://hasa.botble.com/products/snapshot-standard" />
    <a class="product__favorite js-add-favorite-button" href="../wishlist/4.html">
    <i class="fa fa-heart-o"></i>
    </a>
    <ul class="product__actions">
    <li><a class="add-to-cart-button" data-id="4" href="../cart/add-to-cart.html">Add to cart</a></li>
    </ul>
  
    </div>
    <div class="product__content" data-mh="product-item">
    <a class="product__title" href="snapshot-standard.html">Snapshot Standard</a>
    <p class="product__price  sale ">
    <span>8,677,922 ₫</span>
    <del><span>9,861,275 ₫</span></del>
    </p>
   
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    </main>
    </div>
@endsection