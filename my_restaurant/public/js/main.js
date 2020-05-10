 	/*$.ajax({url: "https://api.qrserver.com/v1/create-qr-code/data=" + JSON.stringify(menu_data), 
 		type: 'GET', 
 		data: {data: JSON.stringify(menu_data)}, 
 		success: function(result){
 			$("#qr").html(result);
 	}});*/

let cart_quantity = 0;

function open_cart() {
		$('#cart-content').empty();
		let cart_filled = false;
		$('.menu-item').each(function(i) {
			let $elem = $(this);
			count = parseInt($elem.find('input').val());
			if(count > 0) {
				let $menu_id = $elem.find('input').attr('name'); 

				cart_filled = true;
				let $cart_element = $('<div>');
				$cart_element.addClass('row');
				$cart_element.addClass('cart-element');
				
				let img_src = $elem.find('img').attr( 'src' );
				let sum = 0;
				let cost_text = $elem.find('.menu-cost').text();
				let cost_number = isNaN(parseFloat(cost_text)) ? 0 : parseFloat(cost_text);

				let menu_item_cost = $('<input>', 
					{type: 'number', 
					value: count, 
					class:'col-1 menu-item-count', 
					min:'0',
					name: $menu_id});

				menu_item_cost.change(function() {
					let quantity = parseInt($(this).val());
					console.log(quantity);
					let parent = $(this).parent();
					console.log(parent.find('.menu-item-cost'))
					let cost = parseFloat(parent.find('.menu-item-cost').text());
					console.log(cost);
					parent.find('.menu-item-sum').text(quantity * cost + " $");
					show_qr();
				});


				$cart_element.append($('<img>', {src:img_src, class:'col-2'}));
				$cart_title_price = $('<div>', {class:'col-5'});
				$cart_title_price.append($('<h2>', {text: $elem.find('.menu-item-title').text()}));
				$cart_title_price.append($('<h3> ', {text: cost_text, class:'menu-item-cost'}));

				$cart_element.append($cart_title_price);
				$cart_element.append(menu_item_cost);

				$cart_element.append($('<h2>', 
					{text: count * cost_number + " $", 
					class:'col-3 menu-item-sum'}));
				$('#cart-content').append($cart_element);
			}
		});
		if (!cart_filled) {
			$('#alert').show();
			$('html').animate({scrollTop: 0}, 400);
		} else {
			$('#menu').fadeOut();
			$('#hidden-cart').show();
			$('#hidden-cart').fadeIn();
		}
}

function get_menu_data() {
	let menu_data = [];

	$('.cart-element').each(function(ind) {
		$elem = $(this);
		$menu_input = $elem.find('input');
		
		let menu_obj = {
			'id' : $menu_input.attr('name'),
			'quantity' : $menu_input.val() 
		};
		menu_data.push(menu_obj);
	});

	return menu_data;
}

function show_qr() {
	$('#qr-instruction').show();
	$('#qr').attr('src', "https://api.qrserver.com/v1/create-qr-code/?data=" + JSON.stringify(get_menu_data()));
 } 

$( document ).ready(function() {
	$('.btn-add').click(function(){
		let counter_id = this.previousElementSibling.name;
		let $counter = $('input[name="' + counter_id + '"');
		var value = parseInt($counter.val());
		value = isNaN(value) ? 0 : value;
		value++;
		cart_quantity++;
		$counter.val(value);
		$('#cart-quantity').text(cart_quantity);
		$('#alert').hide();
	});

	$('.btn-sub').click(function(){
		let counter_id = this.nextElementSibling.name;
		let $counter = $('input[name="' + counter_id + '"');
		var value = parseInt($counter.val());
		value = isNaN(value) ? 0 : value;
		if (value > 0) {
			value--;
			cart_quantity--;
		}
		$counter.val(value);
		$('#cart-quantity').text(cart_quantity);
		$('#alert').hide();
	});

	//$('.menu-item-count').change(function() {alert('hello')})
	$('#btn-show-qr').click(function() {
		show_qr();	
    	$([document.documentElement, document.body]).animate({
        	scrollTop: $("#qr").offset().top
        }, 2000);
	});
	$('#cart').click(open_cart);
	$('#cart-bottom').click(open_cart);
});