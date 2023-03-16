$(document).ready(function(){

	$(".hair-carousel").owlCarousel({    
		items:1,
		margin: 10,
		autoplay:true,
    loop: true
	});
	
	dotcount = 1;
	
	jQuery('.owl-dot').each(function() {
		jQuery( this ).addClass( 'dotnumber' + dotcount);
		jQuery( this ).attr('data-info', dotcount);
		dotcount=dotcount+1;
	});
	
	slidecount = 1;
	
	jQuery('.owl-item').not('.cloned').each(function() {
		jQuery( this ).addClass( 'slidenumber' + slidecount);
		slidecount=slidecount+1;
	});
	
	jQuery('.owl-dot').each(function() {	
		grab = jQuery(this).data('info');		
		slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
		jQuery(this).css("background-image", "url("+slidegrab+")");  	
	});
	
	amount = $('.owl-dot').length;
	gotowidth = 100/amount;			
	jQuery('.owl-dot').css("height", gotowidth+"%");

});