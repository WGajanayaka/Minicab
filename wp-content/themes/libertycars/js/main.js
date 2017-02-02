$(document).ready(function(){

	// Book now page Date and Time
	$('#datetimepicker').datetimepicker();
	$('.tourday').datetimepicker();

	// Navigation 
	var navigation = responsiveNav(".nav-collapse", {
	    animate: true,                    // Boolean: Use CSS3 transitions, true or false
	    transition: 284,                  // Integer: Speed of the transition, in milliseconds
	    label: "Menu",                    // String: Label for the navigation toggle
	    insert: "after",                  // String: Insert the toggle before or after the navigation
	    customToggle: "",                 // Selector: Specify the ID of a custom toggle
	    closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
	    openPos: "relative",              // String: Position of the opened nav, relative or static
	    navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
	    navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
	    jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
	    init: function(){},               // Function: Init callback
	    open: function(){},               // Function: Open callback
	    close: function(){}               // Function: Close callback
	  });

	// When Click Book Now use this loadder to wait
	$('.book-now-btn').click(function(){
		$(this).empty().append('<div class="loader"></div>');
	});

	// mobile promocode popup
	$('#mobile-promocode').click(function(){
		$('.fxd-blk').addClass('promocode-blk-view').removeClass('hidden');
	});
	$('#close-btn-popup').click(function(){
		$('.fxd-blk').addClass('hidden');
	});

	$('#pick-address').focus(function(){
		$('#pick-address + i').removeClass('fadeInUp').addClass('animated fadeInDown');
	});
	$('#pick-address').focusout(function(){
		$('#pick-address + i').removeClass('fadeInDown').addClass('fadeOutUp');
		setTimeout(function(){
			$('#pick-address + i').removeClass('fadeOutUp').addClass('fadeInUp');
		},100);
	});

	$('#drop-address').focus(function(){
		$('#drop-address + i').removeClass('fadeInUp').addClass('animated fadeInDown');
	});
	$('#drop-address').focusout(function(){
		$('#drop-address + i').removeClass('fadeInDown').addClass('fadeOutUp');
		setTimeout(function(){
			$('#drop-address + i').removeClass('fadeOutUp').addClass('fadeInUp');
		},100);
	});

	$('#note-btn').click(function(){
		$('#add-notes-dropdown1').removeClass('hidden').addClass('fadeIn');
		$('#add-notes-dropdown2').removeClass('hidden').addClass('fadeIn');
		$('#note-btn').addClass('hidden');
		$('#note-clear-btn').removeClass('hidden');
	});
	$('#note-clear-btn').click(function(){
		$('#add-notes-dropdown1 textarea').val('');
		$('#add-notes-dropdown2 textarea').val('');

		$('#add-notes-dropdown1').addClass('hidden').removeClass('fadeOut');
		$('#add-notes-dropdown2').addClass('hidden').removeClass('fadeOut');
		$(this).addClass('hidden');
		$('#note-btn').removeClass('hidden');
	});	

});



// $(window).scroll(function() {
//     var offset = $("#price-blk-scanner").offset().top; 
//     var mapMargin = $("#fxd-blk-f-remove").offset().top;    

//     if ($(window).scrollTop() > offset) {
//         $('#scroling-img').addClass('f');
//     } else {
//     	$('#scroling-img').removeClass('f').removeClass('ab');
//     }

//     if ($(window).scrollTop() > mapMargin) {    	
//     	$('#scroling-img').addClass('ab').removeClass('f');

//     } else if(offset > $(window).scrollTop() ) {    	
//     	$('#scroling-img').removeClass('animated');

//     } else if( $(window).scrollTop() <= mapMargin) {    	
//     	$('#scroling-img').removeClass('ab');

//     } else if(offset < $(window).scrollTop() < mapMargin) {    	
//     	$('#scroling-img').removeClass('ab').addClass('f');
//     } 
    
// });
