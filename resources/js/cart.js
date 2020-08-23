const formAddToCart = document.querySelector('.add-to-cart');
if(formAddToCart){
	formAddToCart.addEventListener('submit', function(e){
	e.preventDefault();
	const data = new FormData(formAddToCart); /*все данные собранные из формы {{qty: 2, product_id: 14}}*/
	
	axios.post('/cart/add', data)
	.then(function(response){
		changeCart(response.data);
	});
});
}

function changeCart(data){
	document.querySelector('.modal-body').innerHTML = data;
}