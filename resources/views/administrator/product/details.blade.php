@extends('admin-layout')

@section('title', '| Art Work Products')

@section('content')

<!-- ##### Main Content Wrapper Start ##### -->



<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">

                            <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(/images/artworks/{{$product->sku}}/{{$product->image_front}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(/images/artworks/{{$product->sku}}/{{$product->image_rightside}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(/images/artworks/{{$product->sku}}/{{$product->image_leftside}});">
                            </li>

                            <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(/images/artworks/{{$product->sku}}/{{$product->image_hanged}});">
                            </li>

                        </ol>


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="/images/artworks/{{$product->sku}}/{{$product->image_front}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$product->sku}}/{{$product->image_front}}" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$product->sku}}/{{$product->image_rightside}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$product->sku}}/{{$product->image_rightside}}" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$product->sku}}/{{$product->image_leftside}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$product->sku}}/{{$product->image_leftside}}" alt="Third slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="/images/artworks/{{$product->sku}}/{{$product->image_hanged}}">
                                    <img class="d-block w-100" src="/images/artworks/{{$product->sku}}/{{$product->image_hanged}}" alt="Fourth slide">
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
                                <p>{!!$product->description!!}</p>

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
                        <p class="product-price">${{ $product->price }}</p>
                        <a href="product-details.html">
                            <h6>{{ $product->title }} 
                                <span class="author-name">by {{ $product->artist }}</span></h6>
                            </a>
                            <div class="clearbottom"></div>
                        </div>

                        <div class="catagories-menu">
                            <ul>
                                {{-- @foreach ($product->types as $type)
                                <li><span class="light-list">Type | </span> <span class="thick-list">{{ $type->name }}</span></li>
                                @endforeach --}}

                                <li><span class="light-list">Type | </span> <span class="thick-list">{{ $product->type }}</span></li>

                                @foreach ($product->mediums as $medium)
                                <li><span class="light-list">Medium | </span> <span class="thick-list">{{ $medium->name }}</span></li>
                                @endforeach

                                @foreach ($product->styles as $style)
                                <li><span class="light-list">Style | </span> <span class="thick-list">{{ $style->name }}</span></li>
                                @endforeach

                                @foreach ($product->subjects as $subject)
                                <li><span class="light-list">Subject | </span> <span class="thick-list">{{ $subject->name }}</span></li>
                                @endforeach

                                <li><span class="light-list"> Year Created | </span><span class="thick-list">  {{ $product->year_created }}</span></li>

                                <li><span class="light-list">Ready to hang | </span> <span class="thick-list">{{ $product->hangable }}</span></li>

                                <li><span class="light-list">Framed | </span> <span class="thick-list">{{ $product->framed }}</span></li>

                                <li><span class="light-list">Signed | </span> <span class="thick-list">{{ $product->signed }}</span></li>

                                <li><span class="light-list">Signature Location | </span> <span class="thick-list">{{ $product->signature_location }}</span></li>

                                <li><span class="light-list">Support Type | </span> <span class="thick-list">{{ $product->support_type }}</span></li>

                                <li><span class="light-list">Material | </span> <span class="thick-list">{{ $product->title }}</span></li>

                                <li><span class="light-list">Artwork Width | </span> <span class="thick-list">{{ $product->width }}</span></li>

                                <li><span class="light-list">Artwork Height | </span> <span class="thick-list">{{ $product->height }} </span></li>

                                <li><span class="light-list">Artwork Depth | </span> <span class="thick-list">{{ $product->depth }}</span></li>

                                <li><span class="light-list">Artwork Weight | </span> <span class="thick-list">{{ $product->weight }}</span></li>

                                <li><span class="light-list">City | </span> <span class="thick-list">{{ $product->city }}</span></li>

                                @foreach ($product->tags as $tag)
                                <li><span class="light-list">Tags | </span> <span class="thick-list">{{ $tag->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="clearbottom"></div>


                     {{--  <a href="{{route('product.edit', $product->id)}}"><button type="button" name="addtocart" value="5" class="btn amado-btn">Edit</a></button> --}}

                     {{--  <button type="submit" name="addtocart" value="5" class="btn amado-btn">Edit</a></button> --}}

                      <a href="{{route('product.edit', $product->id)}}" class="btn amado-btn mb-15">Edit</a>

                      {!!Form::open(['route' => ['product.destroy', $product->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
                                {!! Form::submit('Delete', ['class' => 'btn amado-btn'])!!}
                      {!!Form::close()!!}


                        <div class="short_overview my-5">
                            <p>{{ $product->brief_description }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->

    <!-- ##### Main Content Wrapper End ##### -->

    @endsection
    <script type="text/javascript">
    @include('admin-partials.confirm_delete')
</script>