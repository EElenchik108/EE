@extends('layouts.app')
@section('content')
	<h1 class="text-center text-uppercase  mb-4">{{$title}}</h1>
	
	<div class="container shadow-lg p-3 mb-5 bg-white rounded">
		<div class="row">			
				<div class=" ">	
					<div class="ml-5">		
						<img src="{{$product->img}}"  alt="{{$product->name}}" class="img-fluid">	
					</div>			
				</div>
				<div class="col-6 ml-5">	
					<div class="">
							<p class="mb-4"><b>Name: </b> {{$product->name}}</p>
							<p><b>Price: </b> {{$product->price}}</p>
							<p><b>Category: </b> {{$product->category ? $product->category->name : 'No category'}}</p>
							<div class="">
								<a href=""  class="mr-5 btn btn-secondary">Buy now</a>
								<a href=""  class="mr-5 btn btn-outline-secondary">Write to seller</a>
								
							</div>
					</div>			
				</div>
				<div class="container">
					<h3>Add Review</h3>
					@guest
						Login or register
					@else	
					<form action="/product/{{$product->slug}}" method="POST">
						@csrf
						<div class="form-group">
							<textarea name="comment" id="" cols="20" rows="5" class="form-control"></textarea>
						</div>
						<input type="hidden" name="product" value="{{$product->id}}">
						<input type="hidden" name="user" value="{{Auth::user()->id}}">
						<button class="btn btn-primary">Send</button>			
					</form>
					@endguest
				</div>
				
		</div>
		<div class="mt-4">
			<p><b>Description: </b>{{$product->description}}</p>
		</div>
		<div class="mt-4">		
			<b>Reviews: {{$product->reviews->count()>0 ? $product->reviews->count() : 'Not reveiw' }}</b>
			
				@if($product->reviews->count()>0) 
				@foreach($product->reviews as $review)
					<p class="border-top">
						{{$review->review}} <pre>{{$review->created_at}}</pre><i>{{$review->user->name}}</i>
					</p>					
				@endforeach
				@endif			
		</div>

	</div>		

	
@endsection