<header class="header header--mobile">
<nav class="navigation--mobile">
<div class="navigation__left">
<a class="logo" href="index.html">
<img src="{{ asset('assets/storage/general/logo.png') }}" alt="HASA Fashion" height="60">
</a>
</div>
<div class="navigation__right">
<div class="header__actions">
<a class="search-btn" href="#"><i class="feather icon icon-search"></i></a>
<a href="login"><i class="feather icon icon-user"></i></a>
<a class="btn-shopping-cart btn-wishlist" href="wishlist.html"><i class="feather icon icon-heart"></i> <span>0</span></a>
<a class="btn-shopping-cart panel-trigger" href="#panel-cart">
<i class="feather icon icon-shopping-cart"></i><span>0</span>
</a>
<a class="panel-trigger" href="#panel-menu"><i class="feather icon icon-menu"></i></a></div>
</div>
</nav>
</header>
<header class="header">
<div class="top-header d-none d-md-block">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="d-flex align-items-center justify-content-center justify-content-md-start">
<ul class="contact_detail text-center text-lg-left">
<li><i class="feather icon icon-phone"></i> <span>18006268</span></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="d-flex align-items-center justify-content-center justify-content-md-end">
<div class="mr-3 choose-currency">
<span>Currency: </span>
<a href="index.html" class="active"><span>USD</span></a>&nbsp;
<a href="index.html"><span>VND</span></a>&nbsp;
</div>
<ul class="header_list">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
</div>
</div>
</div>
</div>
</div>
<nav class="navigation">
<div class="container">
<div class="navigation__left">
<a class="logo" href="index.html">
<img src="{{ asset('assets/storage/general/logo.png') }}" alt="HASA Fashion" height="60">
</a>
</a>
</div>
<div class="navigation__center">
<ul class="menu">
<li class="menu-item    current-menu-item ">
<a href="index.html" target="_self">
Home
</a>
</li>
<li class="menu-item  menu-item-has-children   ">
<a href="{{url('/list-products')}}" target="_self">
Categories
</a>
<span class="sub-toggle"></span>
<ul class="sub-menu">
@foreach($categories as $cat)
<li class="menu-item   ">
<a href="" target="_self">
{{$cat->name}}
</a>
</li>
@endforeach
</ul>
</li>
<li class="menu-item   ">
<a href="blog.html" target="_self">
Blog
</a>
</li>
<li class="menu-item   ">
<a href="contact.html" target="_self">
Contact
</a>
</li>
</ul>
</div>
<div class="navigation__right">
<div class="header__actions">
<a class="search-btn" href="#"><i class="feather icon icon-search"></i></a>
<a class="btn-shopping-cart btn-wishlist" href="wishlist.html"><i class="feather icon icon-heart"></i> </a>
<a class="btn-shopping-cart panel-trigger" href="{{route('cart.view')}}"><i class="feather icon icon-shopping-cart"></i></a>
</div>
</div>
</div>
</nav>
</header>