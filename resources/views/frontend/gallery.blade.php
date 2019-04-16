@extends('user-layout')

@section('title', '| Buy Art Work')

@section('content')

{{-- 	<div class="shop_sidebar_area">
        @include('user-partials.side-menu')
     </div>  --}}

     <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    @if (count($artworks) === 0)
                    ... html showing no articles found
                    @elseif (count($artworks) >= 1)

                    @foreach ($artworks as $artwork)
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ route('artwork.show', $artwork->id) }}">
                                <img src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_front}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_hanged}}" alt="">
                                </a>
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{ $artwork->price }}</p>
                                    <a href="{{ route('artwork.show', $artwork->id) }}">
                                        <h6>{{ $artwork->title }}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        Artist: {{ $artwork->artist }}
                                    </div>
                                    <div class="cart">
                                        <a href="{{route('cart.addItem', $artwork->id)}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="/images/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>






                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

@endsection