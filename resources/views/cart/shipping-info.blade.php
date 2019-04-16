@extends('user-layout')

@section('title', '| Add Shipping Information')

@section('content')

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Shipping Info</h2>
                    </div>

                    {!! Form::open(['route' => 'address.store', 'method' => 'POST']) !!}

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            {{Form::text('firstname', null, ['class' => 'form-control', 'placeholder'=>'First Name'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('lastname', null, ['class' => 'form-control', 'placeholder'=>'Last Name'])}}
                        </div>

                        <div class="col-md-12 mb-3">
                            {{Form::text('address1', null, ['class' => 'form-control', 'placeholder'=>'Address Line 1'])}}
                        </div>

                        <div class="col-md-12 mb-3">
                            {{Form::text('address2', null, ['class' => 'form-control', 'placeholder'=>'Address Line 2 (Optional)'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('city', null, ['class' => 'form-control', 'placeholder'=>'City'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('postcode', null, ['class' => 'form-control', 'placeholder'=>'Post Code'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('state', null, ['class' => 'form-control', 'placeholder'=>'State'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('country', null, ['class' => 'form-control', 'placeholder'=>'Country'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Phone'])}}
                        </div>

                        <div class="col-md-6 mb-3">
                            {{Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Email'])}}
                        </div>
                    </div>

                </div>
                <div class="clearbottom"></div>
                <div class="col-md-12 mb-3">
                    {{Form::submit('Proceed to Payment', ['class'=>'btn amado-btn mb-15'])}}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection
