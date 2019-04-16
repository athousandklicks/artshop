@extends('user-layout')

@section('title', '| Buy Art Work')

@section('content')

<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">

                            <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(/images/artworks/{{$artwork->sku}}/{{$artwork->image_front}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(/images/artworks/{{$artwork->sku}}/{{$artwork->image_rightside}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(/images/artworks/{{$artwork->sku}}/{{$artwork->image_leftside}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(/images/artworks/{{$artwork->sku}}/{{$artwork->image_hanged}});">
                            </li>

                        </ol>


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="/images/artworks/{{$artwork->sku}}/{{$artwork->image_front}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_front}}" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$artwork->sku}}/{{$artwork->image_rightside}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_rightside}}" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$artwork->sku}}/{{$artwork->image_leftside}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_leftside}}" alt="Third slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$artwork->sku}}/{{$artwork->image_hanged}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$artwork->sku}}/{{$artwork->image_hanged}}" alt="Fourth slide">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#video" data-toggle="tab">Promo Video</a></li>
                            <li><a href="#vehicle" data-toggle="tab">Vehicle Overview</a></li>
                            <li><a href="#comments" data-toggle="tab">Comments</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">

                            <div class="tab-pane fade in active" id="video">
                              
                            </div>

                            <div class="tab-pane fade" id="vehicle">
                                <p>{!!$artwork->description!!}</p>

                            </div>

                            <div class="tab-pane fade" id="comments">
                                
                                
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">${{ $artwork->price }}</p>
                        <a href="product-details.html">
                            <h6>{{ $artwork->title }} 
                                <span class="author-name">by {{ $artwork->artist }}</span></h6>
                            </a>
                        </div>

                        <div class="cart">
                            <a href="{{route('cart.addItem', $artwork->id)}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="/images/core-img/cart.png" alt=""> <span class="add-to-cart"> Add to Cart</span> </a>

                            <div class="clearbottom"></div>
                        </div>


                        <div class="catagories-menu">
                            <ul>
                                {{-- @foreach ($artwork->types as $type)
                                <li><span class="light-list">Type | </span> <span class="thick-list">{{ $type->name }}</span></li>
                                @endforeach --}}

                                <li><span class="light-list">Type | </span> <span class="thick-list">{{ $artwork->type }}</span></li>

                                @foreach ($artwork->mediums as $medium)
                                <li><span class="light-list">Medium | </span> <span class="thick-list">{{ $medium->name }}</span></li>
                                @endforeach

                                @foreach ($artwork->styles as $style)
                                <li><span class="light-list">Style | </span> <span class="thick-list">{{ $style->name }}</span></li>
                                @endforeach

                                @foreach ($artwork->subjects as $subject)
                                <li><span class="light-list">Subject | </span> <span class="thick-list">{{ $subject->name }}</span></li>
                                @endforeach

                                <li><span class="light-list"> Year Created | </span><span class="thick-list">  {{ $artwork->year_created }}</span></li>

                                <li><span class="light-list">Ready to hang | </span> <span class="thick-list">{{ $artwork->hangable }}</span></li>

                                <li><span class="light-list">Framed | </span> <span class="thick-list">{{ $artwork->framed }}</span></li>

                                <li><span class="light-list">Signed | </span> <span class="thick-list">{{ $artwork->signed }}</span></li>

                                <li><span class="light-list">Signature Location | </span> <span class="thick-list">{{ $artwork->signature_location }}</span></li>

                                <li><span class="light-list">Support Type | </span> <span class="thick-list">{{ $artwork->support_type }}</span></li>

                                <li><span class="light-list">Material | </span> <span class="thick-list">{{ $artwork->title }}</span></li>

                                <li><span class="light-list">Artwork Width | </span> <span class="thick-list">{{ $artwork->width }}</span></li>

                                <li><span class="light-list">Artwork Height | </span> <span class="thick-list">{{ $artwork->height }} </span></li>

                                <li><span class="light-list">Artwork Depth | </span> <span class="thick-list">{{ $artwork->depth }}</span></li>

                                <li><span class="light-list">Artwork Weight | </span> <span class="thick-list">{{ $artwork->weight }}</span></li>

                                <li><span class="light-list">City | </span> <span class="thick-list">{{ $artwork->city }}</span></li>

                                @foreach ($artwork->tags as $tag)
                                <li><span class="light-list">Tags | </span> <span class="thick-list">{{ $tag->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="clearbottom"></div>

                        <div class="cart">
                            <a href="{{route('cart.addItem', $artwork->id)}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="/images/core-img/cart.png" alt=""> <span class="add-to-cart"> Add to Cart</span> </a>
                        </div>

                        <div class="short_overview my-5">
                            <p>{{ $artwork->brief_description }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->

    <!-- ##### Main Content Wrapper End ##### -->

@endsection