 <!-- Payment Details   -->
<div class="booking-input-block">     
	<h3 class="box-title"><i class="fa fa-check-circle car-yello-icon no-anim" aria-hidden="true"></i> payment details</h3>
	<div class="blk-car-pattern">
		<!-- Hide for the morment 
		<div class="bib-common bib-common-last">
			<label for="pick-up"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> Promo Code</label>
			<input type="text" id="pick-up" name="cabs_PromoCode" value="">
		</div>
		<br>
		-->

		<div class="select-payment-method">
			<button id="cach-payment-button" class="btn btn-default cash" value="1">Cash</button>
			<button id="card-payment-button" class="btn btn-default paypal pay-btn-action" value="2">Card</button>
		</div>
		<br><br>  
		<!--												
		<input type="checkbox"  id="book-now-btn-id-term"  name="book-now-btn-id-term">
		<a href="/liberty_cars/booking-status/" target="_blank"> Terms </a>	
		-->	
		<div id="cash-payment-div" style="display:none">		
			<input type="button" value="Book Now" class="book-now-btn" id="book-now-btn-id" style="color:white;">			  
 		</div>
 		<div id="card-payment-div" style="display:none"> 
 		
 		</div>
 		
		<span id="wait-pas" class="display-none">
		.
		</span>
		<div id="response"></div>
	</div>
	<br>
	<br>
 	<a href="/liberty_cars/cancel-booking/" target="_blank"> Cancel booking  </a> | 
     	<a href="/liberty_cars/booking-status/" target="_blank"> Booking Status </a> | 
</div>

<script type="text/javascript">
// Wasantha Code

jQuery(function(){

   var  ajaxurl = "/liberty_cars/wp-admin/admin-ajax.php";	
   	
   jQuery("#cach-payment-button").click(function()
   {
   	jQuery("#cash-payment-div").show();
   	jQuery("#card-payment-div").hide();
   });
   
   jQuery("#card-payment-button").click(function()
   {
   	//Need to do validation 
   	
   	ConsumerReference = Date.now();
	PaymentReference = Date.now()+amount;
	var passangerDetails = jQuery('#cabformrequest_passanger_data').serializeArray();
	var bookingDetails = jQuery('#cabformrequest_data').serializeArray();
   	
   	$.ajax({
        	url: ajaxurl,
        	data: {
	            	'action': 'judo_provision_request',
	            	'cr' : ConsumerReference,
	            	'pr' : PaymentReference,
	            	'a' : amount,
	            	'vt': vehicleType,
	            	'pax': passangerDetails,
	            	'booking':bookingDetails 
        	},
        	success:function(data) {
        		jQuery("#card-payment-div").html(data);
            		// This outputs the result of the ajax request
            		console.log(data);
        	},
        	error: function(errorThrown){
           		console.log(errorThrown);
        	}
    	}); 
    	
   	jQuery("#cash-payment-div").hide();
   	jQuery("#card-payment-div").show();  	
   });
   
   jQuery("#book-now-btn-id").click(function()
   {
   	ajaxSubmit_pas();
   });
  
}); 
</script>