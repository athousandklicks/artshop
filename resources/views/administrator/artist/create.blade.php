@extends('admin-layout')

@section('title', '| Add Art to Gallery')

@section('content')

<div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Add Artist </h2>
                            </div>

                            {!! Form::open(['route' => 'artist.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Name of Artist'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    {{Form::text('about', null, ['class' => 'form-control', 'placeholder'=>'Artist Bio'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    
                                    {{Form::textarea('cv', null, ['class' => 'form-control', 'placeholder'=>'Artist CV'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    
                                    {{Form::textarea('exhibitions', null, ['class' => 'form-control', 'placeholder'=>'Exhibitions'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    
                                    {{Form::textarea('mentors', null, ['class' => 'form-control', 'placeholder'=>'Influencers'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    
                                    {{Form::text('tags', null, ['class' => 'form-control', 'placeholder'=>'Tags'])}}
                                </div>
                                <div class="col-md-12 mb-3">
                                    {{Form::label('image', 'Profile Pic')}}
                                {{Form::file('image', ['class'=>'btn btn-small form-control'])}}
                                </div>

                                <div class="col-md-12 mb-3">
                                {{Form::submit('Add Artist', ['class'=>'btn amado-btn mb-15'])}}
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


@endsection