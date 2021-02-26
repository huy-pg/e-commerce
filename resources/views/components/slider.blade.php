<div><div class="owl-slider owl-carousel carousel--nav inside" data-owl-auto="false" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
@foreach($banners as $banner)
<div class="slider-item">
<img src="{{url('uploads/',$banner->image)}}" alt="New Collection">
<div class="slider__content">
<div class="slider__content__wrapper">
<div class="slider__content__wrapper__content">
<h2 class="staggered-animation animated fadeInDown" data-animation="fadeInDown" data-animation-delay="0.3s">New Collection</h2>
<p class="staggered-animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
<a class="btn--custom btn--rounded staggered-animation animated fadeInUp" href="{{url('/list-products')}}" data-animation="fadeInUp" data-animation-delay="0.5s">Shop Now</a>
</div>
</div>
</div>
</div>
@endforeach