
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="E6Ah27q7Lrq4wz5d7oE6ebmIJEMsTHDhsWj8RejB">
<title>     Checkout
 </title>
<link rel="shortcut icon" href="https://hasa.botble.com/storage/general/favicon.png">
<link media="all" type="text/css" rel="stylesheet" href="https://hasa.botble.com/vendor/core/core/base/libraries/font-awesome/css/fontawesome.min.css">
<link media="all" type="text/css" rel="stylesheet" href="https://hasa.botble.com/vendor/core/plugins/ecommerce/css/front-theme.css?v=1.0.2">
<link media="all" type="text/css" rel="stylesheet" href="https://hasa.botble.com/vendor/core/core/base/libraries/toastr/toastr.min.css">
<script src="https://hasa.botble.com/vendor/core/plugins/ecommerce/js/checkout.js?v=1.0.3" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
</head>
@if(Auth::guard('web')->check())
<body class="checkout-page">
<div class="checkout-content-wrap">
<div class="container">
<div class="row">
<link rel="stylesheet" href="https://hasa.botble.com/vendor/core/plugins/payment/libraries/card/card.css">
<link rel="stylesheet" href="https://hasa.botble.com/vendor/core/plugins/payment/css/payment.css?v=1.0">
<form method="POST" action="" accept-charset="UTF-8" class="checkout-form payment-checkout-form" id="checkout-form">@csrf
<input type="hidden" name="checkout-token" id="checkout-token" value="4081628a0d01f1e4aa210ae23df38af3">
<div class="row">
<div class="col-lg-7 col-md-6 col-12 left">
<div class="checkout-logo">
<a href="https://hasa.botble.com" title="HASA Fashion shop">
<img src="https://hasa.botble.com/storage/general/logo.png" class="img-fluid" width="150" alt="HASA Fashion shop" />
</a>
</div>
<hr />

<div class="d-sm-block d-md-none" style="padding: 0 15px;" id="main-checkout-product-info-mobile">
<div class="payment-info-loading" style="display: none;">
<div class="payment-info-loading-content">
<i class="fas fa-spinner fa-spin"></i>
</div>
</div>
<div id="cart-item">
<p>Product(s):</p>
<div class="row cart-item">
<div class="col-3">
<div class="checkout-product-img-wrapper">
<img class="item-thumb img-thumbnail img-rounded" src="https://hasa.botble.com/storage/products/6-a-150x150.jpg" alt="Clutch handmade">
<span class="checkout-quantity">2</span>
</div>
</div>
<div class="col-5">
<p>Clutch handmade
Color: Red,
Size: S
 </p>
</div>
<div class="col-4 float-right">
<p>$329.64</p>
</div>
</div> 
<div class="row cart-item">
<div class="col-3">
<div class="checkout-product-img-wrapper">
<img class="item-thumb img-thumbnail img-rounded" src="https://hasa.botble.com/storage/products/4-a-150x150.jpg" alt="Gucci Zip Around Wallet">
<span class="checkout-quantity">1</span>
</div>
</div>
<div class="col-5">
<p>Gucci Zip Around Wallet
Color: Green,
Size: S
</p>
</div>
<div class="col-4 float-right">
<p>$210.04</p>
</div>
</div> 
<div class="row">
<div class="col-6">
<p>Subtotal:</p>
</div>
<div class="col-6">
<p class="price-text sub-total-text text-right"> $869.32 </p>
</div>
</div>
<div class="row">
<div class="col-6">
<p>Shipping fee:</p>
</div>
<div class="col-6 float-right">
<p class="price-text shipping-price-text">$0.00</p>
</div>
</div>
<div class="row">
<div class="col-6">
<p>Tax:</p>
</div>
<div class="col-6 float-right">
<p class="price-text tax-price-text">$86.93</p>
</div>
</div>
<hr />
<div class="row">
<div class="col-6">
<p>Total:</p>
</div>
<div class="col-6 float-right">
<p class="total-text raw-total-text" data-price="956.252"> $956.25 </p>
</div>
</div>
</div>
<div>
<hr />
<div class="checkout-discount-section">
<a href="#" class="btn-open-coupon-form">You have a coupon code?</a>
</div>
<div class="coupon-wrapper" style="display: none;">
<div class="row promo coupon coupon-section">
<div class="col-lg-8 col-md-8 col-8">
<input type="text" name="coupon_code" class="form-control coupon-code input-md checkout-input" value="" placeholder="Enter coupon code...">
<div class="coupon-error-msg">
<span class="text-danger"></span>
</div>
</div>
<div class="col-lg-4 col-md-4 col-4">
<button class="btn btn-md btn-gray btn-info apply-coupon-code float-right" data-url="https://hasa.botble.com/coupon/apply" type="button" style="margin-top: 0;padding: 10px 20px;><i class="><i class="fa fa-gift"></i> Apply</button>
</div>
</div>
</div>
<div class="clearfix"></div>
<hr />
</div>
</div> 
<div class="form-checkout">
<form action="" method="POST">
@csrf
<div>
<h5 class="checkout-payment-title">Shipping information</h5>
<input type="hidden" value=" {{Auth::guard('web')->user()->id}}" >
<div class="customer-address-payment-form">
<div class="form-group">
<!-- <p>You have an account already? <a href="https://hasa.botble.com/login">Login</a></p> -->
</div>
<div class="address-form-wrapper">
<div class="row">
<div class="col-12">
<div class="form-group ">
<input type="text" name="address[name]" id="address[name]" placeholder="Full Name" class="form-control address-control-item checkout-input" value=" {{Auth::guard('web')->user()->name}}">
<input type="hidden" name="address[id]" id="address[id]" placeholder="Full Name" class="form-control address-control-item checkout-input" value=" {{Auth::guard('web')->user()->id}}">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 col-12">
<div class="form-group  ">
<input type="text" name="address[email]" id="address[email]" placeholder="Email" class="form-control address-control-item checkout-input" value="{{Auth::guard('web')->user()->email }}">
</div>
</div>
<div class="col-lg-4 col-12">
<div class="form-group  ">
<input type="text" name="address[phone]" id="address[phone]" placeholder="Phone" class="form-control address-control-item checkout-input" value="{{Auth::guard('web')->user()->phone}}">
</div>
</div>
</div>
<div class="row">

<div class="col-12">
<div class="form-group ">
<input id="address_address" type="text" class="form-control address-control-item checkout-input" placeholder="Address" name="address[address]" value="{{Auth::guard('web')->user()->address }}">
</div>
</div>
</div>
</div>


</div>
</div>
<br>

<br>
<div>
<h5 class="checkout-payment-title">Payment method</h5>
<input type="hidden" name="amount" value="956.252">
<input type="hidden" name="currency" value="USD">
<input type="hidden" name="currency_id" value="1">
<input type="hidden" name="callback_url" value="https://hasa.botble.com/payment/status">
<input type="hidden" name="return_url" value="https://hasa.botble.com/checkout/4081628a0d01f1e4aa210ae23df38af3/success">
<ul class="list-group list_payment_method">

<li class="list-group-item">
<input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_paypal" value="1">
<label for="payment_paypal" class="text-left">Pay online via PayPal</label>
</li>
<li class="list-group-item">
 <input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_cod" value="2" data-toggle="collapse" data-target=".payment_cod_wrap" data-parent=".list_payment_method">
<label for="payment_cod" class="text-left">Cash on delivery (COD)</label>
<div class="payment_cod_wrap payment_collapse_wrap collapse " style="padding: 15px 0;">
Please pay money directly to the postman, if you choose cash on delivery method (COD).
</div>
</li>
<li class="list-group-item">
<input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_bank_transfer" value="3" data-toggle="collapse" data-target=".payment_bank_transfer_wrap" data-parent=".list_payment_method">
<label for="payment_bank_transfer" class="text-left">Bank transfer</label>
<div class="payment_bank_transfer_wrap payment_collapse_wrap collapse " style="padding: 15px 0;">
</div>
</li>
</ul>
</div>
<br>

<div class="form-group">
<div class="row">
<div class="col-md-6 d-none d-md-block" style="line-height: 53px">
<a class="text-info" href="https://hasa.botble.com/cart"><i class="fas fa-long-arrow-alt-left"></i> Back to cart</a>
</div>
<div class="col-md-6 col-sm-12 col-12">
<button type="submit" class="btn payment-checkout-btn payment-checkout-btn-step float-right" data-processing-text="Processing. Please wait..." data-error-header="Error">
Checkout
</button>
</div>
</div>
</div>
</form>
</div> 
</div>

<div class="col-lg-5 col-md-6 d-none d-md-block right" id="main-checkout-product-info">
<div class="payment-info-loading" style="display: none;">
<div class="payment-info-loading-content">
<i class="fas fa-spinner fa-spin"></i>
</div>
</div>
<div class="row product-item">
<div class="col-lg-2 col-md-2">
<div class="checkout-product-img-wrapper">
<img class="item-thumb img-thumbnail img-rounded" src="https://hasa.botble.com/storage/products/6-a-150x150.jpg" alt="Clutch handmade">
<span class="checkout-quantity">2</span>
 </div>
</div>
<div class="col-lg-6 col-md-5">
<p style="margin-bottom: 0;">Clutch handmade</p>
<p>
<small>
Color: Red,
Size: S
</small>
</p>
</div>
<div class="col-lg-4 col-md-4 col-4 float-right">
<p class="price-text">
<span>$329.64</span>
</p>
</div>
</div> 
<div class="row product-item">
<div class="col-lg-2 col-md-2">
<div class="checkout-product-img-wrapper">
<img class="item-thumb img-thumbnail img-rounded" src="https://hasa.botble.com/storage/products/4-a-150x150.jpg" alt="Gucci Zip Around Wallet">
<span class="checkout-quantity">1</span>
</div>
</div>
<div class="col-lg-6 col-md-5">
<p style="margin-bottom: 0;">Gucci Zip Around Wallet</p>
<p>
<small>
Color: Green,
Size: S
</small>
</p>
</div>
<div class="col-lg-4 col-md-4 col-4 float-right">
<p class="price-text">
<span>$210.04</span>
</p>
</div>
</div> 
<hr />
<!-- <div class="checkout-discount-section">
<a href="#" class="btn-open-coupon-form">You have a coupon code?</a>
</div> -->

<div class="row total-price">
<div class="col-lg-7 col-md-8 col-5">
<p>Total:</p>
</div>
<div class="col-lg-5 col-md-4 col-5 float-right">
<p class="total-text raw-total-text" data-price="956.252"> $956.25 </p>
@else
<div class="alert alert-success">
  <strong>Error!</strong> You need <a href="#" class="alert-link">login</a>.
</div>
@endif
</div>
</div>
</div>
</div>
</div>
<script src="https://hasa.botble.com/vendor/core/plugins/payment/libraries/card/card.js" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
<script src="https://js.stripe.com/v2/" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
<script src="https://hasa.botble.com/vendor/core/plugins/payment/js/payment.js?v=1.0" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
</div>
</div>
</div>
<script src="https://hasa.botble.com/vendor/core/plugins/ecommerce/js/utilities.js" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
<script src="https://hasa.botble.com/vendor/core/core/base/libraries/toastr/toastr.min.js" type="5e057b93483c8e5732bc6c78-text/javascript"></script>
<script type="5e057b93483c8e5732bc6c78-text/javascript">
        window.messages = {
            error_header: 'Error',
            success_header: 'Success',
        }
    </script>
<script type="5e057b93483c8e5732bc6c78-text/javascript">
            $(document).ready(function () {
                                                                                                });
        </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="5e057b93483c8e5732bc6c78-|49" defer=""></script></body>
</html>
