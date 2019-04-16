<!-- Close Icon -->
<div class="nav-close">
    <i class="fa fa-close" aria-hidden="true"></i>
</div>
<!-- Logo -->
<div class="logo">
    <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
</div>
<!-- Amado Nav -->
<nav class="amado-nav">
    <ul> 
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{route('index')}}">All Art</a></li>
        <li class="{{ Request::is('paintings') ? "active" : "" }}"><a href="{{route('paintings')}}">Painting</a></li>
        <li class="{{ Request::is('drawings') ? "active" : "" }}"><a href="{{route('drawings')}}">Drawing</a></li>
        <li class="{{ Request::is('sculptures') ? "active" : "" }}"><a href="{{route('sculptures')}}">Sculpture</a></li>
        <li class="{{ Request::is('digitals') ? "active" : "" }}"><a href="{{route('digitals')}}">Digital</a></li>
        <li class="{{ Request::is('photographys') ? "active" : "" }}"><a href="{{route('photographys')}}">Photography</a></li>
        <li class="{{ Request::is('prints') ? "active" : "" }}"><a href="{{route('prints')}}">Print</a></li>
        
    </ul>
</nav>

@if(Auth::user())
<!-- Logout implementation -->
<div class="amado-btn-group mt-30 mb-30">
    <a class="btn amado-btn active" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</div>
@else
<div class="amado-btn-group mt-30 mb-20">
    <a href="{{ route('login') }}" class="btn amado-btn mb-15">Login</a>
</div>
@endif

<!-- Cart Menu -->
<div class="cart-fav-search mb-30">

    <a href="{{route('cart.index')}}" class="cart-nav">
        <img src="img/core-img/cart.png" alt=""> 
        Cart <span>
            @if(Cart::count() == 0)
            (0)
            @elseif(Cart::count() > 1)
            ({{Cart::count()}} Items)
            @else
            ({{Cart::count()}} Item)
        @endif</span>
    </a>

    <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
    <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
</div>
<!-- Button Group -->
<div class="amado-btn-group mt-30 mb-100">
    <a href="#" class="btn amado-btn mb-15">%Discount%</a>
    <a href="#" class="btn amado-btn active">New this week</a>
</div>

<!-- Social Button -->
<div class="social-info d-flex justify-content-between">
    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>