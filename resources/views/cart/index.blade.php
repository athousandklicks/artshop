@extends('user-layout')

@section('title', '| Buy Art Work')

@section('content')


<div class="cart-table-area section-padding-100">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="cart-title mt-50">
					<h2>Shopping Cart</h2>
				</div>

				<div class="cart-table clearfix">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cartItems as $cartItem)
							<tr>
								<td class="cart_product_img">
									<a href="#"><img src={{$cartItem->options->image}} alt="Product"></a>

									

								</td>
								<td class="cart_product_desc">
									<h5>{{$cartItem->name}}</h5>
								</td>
								<td class="price">
									<span>${{$cartItem->price}}</span>
								</td>
								<td class="qty">
									<div class="qty-btn d-flex">
										
										<div class="quantity">
											{!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT']) !!}

											<input name="qty" min="1" type="text" value="{{$cartItem->qty}}">
										</div>
										{{Form::submit('Add', ['class'=>'button-qty-add'])}}
											{!!Form::close()!!}
									</div>
								</td>
								<td class="qty">
									<div class="qty-btn d-flex">
										<div class="quantity">
									{!!Form::open(['route' => ['cart.destroy', $cartItem->rowId], 'method' => 'DELETE'])!!}
                      					</div>
                      					{!! Form::submit('Delete', ['class'=>'button-qty-delete'])!!}
                      					{!!Form::close()!!}
									</div>
								</td>
							</tr>
							
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="cart-summary">
					<h5>Cart Total</h5>
					<ul class="summary-table">
						<li><span>sub Total:</span> <span>${{Cart::subtotal()}}</span></li>
						<li><span>Tax:</span> <span>${{Cart::tax()}}</span></li>
						<li><span>Delivery:</span> <span>Free</span></li>
						<li><span>Grand Total:</span> <span>${{Cart::total()}}</span></li>
					</ul>


					<span class="cart-item-header"><img src="/images/core-img/cart.png" alt="No of Items in Cart">  CART</span> <span class="cart-item-text">
							@if(Cart::count() == 0)
							(0)
							@elseif(Cart::count() > 1)
							({{Cart::count()}} Items)
							@else
							({{Cart::count()}} Item)
						@endif</span>
					@if(Cart::count()==0)
					
					@else
					<div class="cart-btn mt-30">
						<a href="/checkout" class="btn amado-btn w-100">Checkout</a>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>



@endsection