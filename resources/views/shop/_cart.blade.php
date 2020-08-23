@if( session('cart') )
{{session('cart')}}

@else
	Your cart is empty
@endif