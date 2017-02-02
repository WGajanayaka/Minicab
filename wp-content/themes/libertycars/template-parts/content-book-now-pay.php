<!-- COVER WRAPPER -->
    <div class="cover-wraper pages-header">
      
      <!-- HEADER SECTION -->
      <div class="header-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-3">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
            </div>
            <div class="col-md-8 col-sm-9">

              <div class="top-login">
                <div class="authenti"><a href="#">Login</a> / <a href="#">Register</a></div>
                <div class="tele">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <a href="tel:02084275555">020 8427 5555</a>
                </div>
              </div>
              <div class="menu fixed">
                <!-- Navigation -->

                <nav class="nav-collapse">
                  <ul>
                    <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">book now</a></li>
                    <li><a href="#">airport info</a></li>
                    <li><a href="#">faqs</a></li>
                    <li><a href="#">contact us</a></li>
                  </ul>
                </nav>

                <!-- Navigation End -->                
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- HEADER SECTION END -->      

    </div>
    <!-- COVER WRAPPER END-->

    <!-- HEADER CONTENT -->
    
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="animated fadeIn"><i class="fa fa-car car-yello-icon" aria-hidden="true"></i> make car booking on ...</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER CONTENT END -->


    


    <!-- PAGE CONTENT -->
    
    <div class="page-content" id="price-blk-scanner">
      <div class="container-fluid">
        <div class="row table-row">

          <div class="col-lg-5 col-md-4 give-padding-map-page table-col">
            <div class="lft-dashbord">
              <h2>journey details</h2>
              <div class="clearfix"></div>

              <div class="jumped-content">

                <!-- Trip Data gathering  -->
				<form name="cabformrequest_data" id="cabformrequest_data" method="POST">
					   <input type="hidden" name="cabs_Source" value="Other">
 					    <!--  <input type="hidden" name="cabs_BookingTime" value="2017-01-18T16:00:00-05:00"> -->
					   <input type="hidden" name="cabs_Currency" value="GBP"> 
 					   <input type="hidden" name="cabs_PaymentType" value="Account">

 
                <div class="booking-input-block"> 

                  <div class="bib-common">
                    <label for="pick-up"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> pick up</label>
					  <input  id="ac1" class="autocomplete" type="text" name="cabs_FromDataAddress" value="<?php if(isset($_POST['cabs_DataAddress1'])){ echo $_POST['cabs_DataAddress1']; } ?>"><br> 
					  <input type="hidden" id="ac1_lat" name="ac1_lat" value="<?php  if(isset($_POST['ac1_lat'])){ echo $_POST['ac1_lat']; } ?>"> 
					  <input type="hidden" id="ac1_lng" name="ac1_lng" value="<?php  if(isset($_POST['ac1_lng'])){ echo $_POST['ac1_lng']; } ?>"> 
                  </div>
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown1">                    
                    <textarea placeholder="PICK UP NOTE"></textarea>
                  </div>



                  <div class="bib-common">
                    <label for="drop-down"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> drop off</label>
					
					  <input  id="ac2" class="autocomplete"  type="text" name="cabs_ToDataAddress" value="<?php if(isset($_POST['cabs_DataAddress2'])){ echo $_POST['cabs_DataAddress2']; } ?>"><br>
					  <input type="hidden" id="ac2_lat" name="ac2_lat" value="<?php  if(isset($_POST['ac2_lat'])){ echo $_POST['ac2_lat']; } ?>"> 
					  <input type="hidden" id="ac2_lng" name="ac2_lng" value="<?php  if(isset($_POST['ac2_lng'])){ echo $_POST['ac2_lng']; } ?>">  
					 
                  </div>
				  
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown2">                    
                    <textarea placeholder="DROP OFF NOTE"></textarea>
                  </div>   

                  <div class="bib-common bib-common-last">
                    <label for="pick-up"><i class="fa fa-calendar" aria-hidden="true"></i> pick-up date & time</label>
                    <input type="text" class="tourday" name="cabs_BookingTime" value="">
                  </div>


							<span id="wait" class="display-block">
							.
							</span>
                  <div class="bib-common text-right">                    
                   <!-- 
				   <button class="btn note-btn" id="note-btn">add note</button>                   
				   <button class="btn hidden note-btn" id="note-clear-btn">clear note</button>
-->
 
 
								<button id="wait-g-q" type="button" onclick="ajaxSubmit()" class="btn btn-default display-none">Get Quotes <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
 


                  </div>
                </div>
				
					   
				   <input type="hidden" name="cabs_passangerCount" value="1">
 
				   <input type="hidden" name="cabs_LuggageCount" value="1"> 				  
				 
				   <input type="hidden" name="cabs_Facilities" value="None"> 				  
				   
				   <input type="hidden" name="cabs_DriverType" value="Any"> 				  
				   
				   <input type="hidden" name="cabs_VehicleType" value="Saloon"> 

				</form>
	
	
                <!-- Select car -->
                <div class="booking-input-block select-car">                  
                  <h3 class="box-title"><i class="fa fa-car car-yello-icon no-anim" aria-hidden="true"></i> choose your car</h3>

                <div class="car-wrapper">

				  
	 

						<div id="responseVehicles"> 
							  
							  

							
						</div>
				

                </div>
				</div>
				
                <!-- Passenger Details -->
                <div class="booking-input-block">   


				<form name="cabformrequest_passanger_data" id="cabformrequest_passanger_data" method="POST">


                  <h3 class="box-title"><i class="fa fa-address-card-o car-yello-icon no-anim" aria-hidden="true"></i> passenger details</h3>

                  <div class="blk-car-pattern">

                    <h5>already a member? <span><a href="#">sign in <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i></a></span></h5>
					  <input type="hidden" name="cabs_IsLead" value="true"><br>
 
                    <div class="bib-common">
                      <label for="pick-up"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> name</label>                      
                      <input type="text" id="pick-up" name="cabs_Name" value="">
                    </div>
					
  
                    <div class="bib-common">
                      <label for="drop-off"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i> email</label>
                      <input type="text" id="drop-off" name="cabs_EmailAddress" value="">
                    </div>

                    <div class="bib-common bib-common-last">
                      <label for="pick-up"><i class="fa fa-phone-square fa-lg fa-fw" aria-hidden="true"></i> mobile number</label>
                      <input type="text" id="pick-up" name="cabs_TelephoneNumber" value="">
                    </div>
							
						<input type="hidden" name="cabs_DriverNote" value="Please help passenger into vehicle."> 
    
					   <input type="hidden" name="cabs_VendorEvents" value="BookingDispatched NoFare BookingCompleted BookingCancelled"> 
						 
					   <input type="hidden" name="cabs_AlertMethod" value="Textback"> 
						 
					   <input type="hidden" name="cabs_AgentEvents" value="LocationUpdate VehicleArrived PassengerOnBoard"> 

						 
					   <input type="hidden" name="cabs_AgentBookingReference" value="AgentBookingRefd"> 
					  
					  
					  <input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value=""> 
					  
					  <input type="hidden" name="cabs_set_selected_vehicle" id="cabs_set_selected_vehicle" value=""> 
			

                    
                  </div> 
				  
				  
 
				  
 		<br>			  
				  
				  
				  

				  
				  			<span id="wait-pas" class="display-none">
							.
							</span>
   				    <div id="response"></div>
     <input type="submit" value="Payment" class="book-now-btn" id="book-now-btn-Payment" style="color:white; ">
				  <input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value=""> 
			   

 </form>				  					
				
					
							 
					 <!-- Payment Details   -->
						<div class="booking-input-block">     

						  <h3 class="box-title"><i class="fa fa-check-circle car-yello-icon no-anim" aria-hidden="true"></i> payment details</h3>

						  <div class="blk-car-pattern">

							<div class="select-payment-method">
							  <button class="btn btn-default cash" type="submit">cash</button>
							  <button class="btn btn-default card" type="submit">paypal</button>
							  <button class="btn btn-default paypal" type="submit">card</button>
							</div>

							<h5 class="payment-det-h5">Paypal details</h5>
							<div class="bib-common bib-common-last">
							  <label for="pick-up" id="bd-crd-holder"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> Name</label>                      
							  <input type="text" id="pick-up" name="" placeholder="Name">
							</div>
							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> Amount </label>
							  <input type="text" id="drop-off" name="" placeholder="Amount" name="amount" value="9.00">
							</div>
							
							
						<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post"  target="_blank"> 							-->

    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="cabstesting123@gmail.com">
    <input type="hidden" name="item_name" value="Donation">
    <input type="hidden" name="item_number" value="1">
     <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="GB">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
	<input type="hidden" name="return" value="http://localhost/cabs/test-api/">  </br>

	<br>			  <input type="submit" value="Book Now" class="book-now-btn" id="book-now-btn-id" style="color:white;">

    <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
	
		<!--  </form> 							-->

	
							<!--
							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-cc-visa fa-lg fa-fw" aria-hidden="true"></i> card number</label>
							  <input type="text" id="drop-off" name="" placeholder="Enter Card Number">
							</div>

							<div class="bib-common bib-common-last">
							  <label for="pick-up"><i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i> expiry date</label>
							  <input type="text" id="pick-up" name="" placeholder="MM / YY">
							</div>

							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-credit-card-alt fa-lg fa-fw" aria-hidden="true"></i> cvv</label>
							  <input type="text" id="drop-off" name="" placeholder="Enter Code">
							</div>

							<h5 class="payment-det-h5">enter billing address</h5>

							<div class="bib-common bib-common-last">
							  <label for="choose-country"><i class="fa fa-star fa-lg fa-fw" aria-hidden="true"></i> country</label>                      
							  <select id="choose-country">
								<option>Choose country</option>
								<optgroup>test</optgroup>
								<optgroup>test</optgroup>
							  </select>
							</div>

							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-map fa-lg fa-fw" aria-hidden="true"></i> post code</label>
							  <input type="text" id="drop-off" name="" placeholder="Enter Postcode">
							</div>

							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i> address line 1</label>
							  <input type="text" id="drop-off" name="" placeholder="Enter Address">
							</div>

							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i> address line 2</label>
							  <input type="text" id="drop-off" name="" placeholder="Optional">
							</div>

							<div class="bib-common bib-common-last">
							  <label for="drop-off"><i class="fa fa-map-o fa-lg fa-fw" aria-hidden="true"></i> city</label>
							  <input type="text" id="drop-off" name="" placeholder="Enter city">
							</div>
							
							
							-->

						  </div>

						</div>
				  
				 

 <!--
 
<form action="/liberty_cars/make-payment/" target="_blank" method="POST">
 				  <input type="submit" value="Payment" class="book-now-btn" id="book-now-btn-Payment" style="color:white; ">
				  <input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value=""> 

</form>

-->

  <br><br><br>
  <a href="/liberty_cars/cancel-booking/" target="_blank"> Cancel booking  </a> | 
     <a href="/liberty_cars/booking-status/" target="_blank"> Booking Status </a>

  
 
                </div>


 
              </div>
            </div>
          </div>


          <div class="col-lg-7 col-md-8 remove-padding-right rmv-padding-left-ipd table-col">

            <div class="mobile-promocode" id="mobile-promocode">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> add your promocode
            </div>

            <div class="map-block animated" id="scroling-img">              
             <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63320.99203996233!2d80.59870647749875!3d7.290570152856939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!3m2!1d7.2905714999999995!2d80.6337262!4m0!5e0!3m2!1sen!2slk!4v1483463835187" width="300px" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            
 
 
<div id="map" ></div>


			
</div>
                                    
          </div>

        </div>
      </div>
    </div>

    <!-- PAGE CONTENT END-->

    <div id="fxd-blk-f-remove"></div>
	
	

<!-- Replace the value of the key parameter with your own API key. -->
<!--
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&callback=initMap">

-->

</script>
	
	<script type="text/javascript">

function initMap() {
	
	
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: {lat: 51.507351, lng: -0.127758}
  });
  directionsDisplay.setMap(map);
  
  
  //onChangeHandler();

  var onChangeHandler = function() {
    
	calculateAndDisplayRoute(directionsService, directionsDisplay);
	//alert(64);
  };
  document.getElementById('ac1').addEventListener('click', onChangeHandler);
 // document.getElementById('ac1').addEventListener('change', onChangeHandler);
  document.getElementById('ac2').addEventListener('click', onChangeHandler);
//  document.getElementById('ac2').addEventListener('change', onChangeHandler);
  document.getElementById('wait-g-q').addEventListener('click', onChangeHandler);
 // body.addEventListener("load", onChangeHandler);

  
   
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: document.getElementById('ac1').value,
    destination: document.getElementById('ac2').value,
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      console.log('Directions request failed due to ' + status);
    }
  });
}


</script>



 <script type="text/javascript">
 
 
	//////////////////////////////gm	/////////////////////// 

	var placeSearch, autocomplete,autocomplete2;
	var componentForm = {
	    street_number: 'short_name',
	    route: 'long_name',
	    locality: 'long_name',
	    administrative_area_level_1: 'short_name',
	    country: 'long_name',
	    postal_code: 'short_name'
	};



	// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.

	// This example requires the Places library. Include the libraries=places
	// parameter when you first load the API. For example:
	// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	//intilize directions api separately initMap() , then autocomplete api

	function initialize() {
		
		
		initMap();

	    var acInputs = document.getElementsByClassName("autocomplete");

	    var autocomplete2 = new google.maps.places.Autocomplete(acInputs[1], {
	        types: ['geocode']
	    });
	    var autocomplete1 = new google.maps.places.Autocomplete(acInputs[0], {
	        types: ['geocode']
	    });

	 
	 
				//setting map defaults locs
	            var geolocation = {
	                lat: 51.507351,
	                lng: -0.127758
	            };
	            var circle = new google.maps.Circle({
	                center: geolocation,
	                radius: position.coords.accuracy
	            });
	            autocomplete2.setBounds(circle.getBounds());
	            autocomplete1.setBounds(circle.getBounds());
				// def locs ends
		//alert(geolocation.lat);
 		
 
	    google.maps.event.addListener(autocomplete2, 'place_changed', function() {

	        var place2 = autocomplete2.getPlace();

	        for (var component in componentForm) {

	        }

	        var loc = place2.geometry.location;

	        document.getElementById("ac2_lat").value = place2.geometry.location.lat();
	        document.getElementById("ac2_lng").value = place2.geometry.location.lng();

 	        /// update vehicles whenever user enters new addresss
	        ajaxSubmit();

	    });


	    google.maps.event.addListener(autocomplete1, 'place_changed', function() {

	        var place1 = autocomplete1.getPlace();

	        for (var component in componentForm) {

	        }

	        var loc = place1.geometry.location;
	        //console.log(loc);

	        document.getElementById("ac1_lat").value = place1.geometry.location.lat();
	        document.getElementById("ac1_lng").value = place1.geometry.location.lng();
 
	        ajaxSubmit();


	    });
 
	}

//initialize();

	
 
	 


	//////////////////////////////gm ends/////////////////////// 



	jQuery('#cabformrequest_data').submit(ajaxSubmit);
	jQuery('#cabformrequest_passanger_data').submit(ajaxSubmit_pas);
	//console.log(jQuery( '#cabformrequest_passanger_data').serializeArray());
	function ajaxSubmit_pas() {

				//hide b btn
 				jQuery("#book-now-btn-id").addClass("display-none");				
 				jQuery("#book-now-btn-id").removeClass("display-block");				
 				//show ldr
				jQuery("#wait-pas").addClass("display-block");
				jQuery("#wait-pas").removeClass("display-none");

				
 

				
		    var cabformrequest_vehicle_type_data_var = document.getElementById('cabs_set_selected_vehicle').value;

			var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();


	    jQuery.ajax({
	        type: "POST",
	        //           dataType: 'json',
	        url: "/liberty_cars/wp-admin/admin-ajax.php",
	        data: {
	            action: "cabform_request_data_ajax_call",
	            form_data: cabformrequest_data_var,
	            veh_type: cabformrequest_vehicle_type_data_var
	        },
	        success: function(data) {

	            var obj = jQuery.parseJSON(data);
	            console.log(obj);

	            var setAvRes = obj.AvailabilityReference;
				
				///do this last along with pass data

	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
	            console.log(setAvRes);

				//document.getElementById('book-now-btn-id').style.display="block";
				
				
				
				
				
				
				
				////////// send pas detailsss after selectionn
				
				
				
						var cabformrequest_data_var_passanger = jQuery('#cabformrequest_passanger_data').serializeArray();
						//var cabformrequest_data_var = jQuery( '#cabformrequest_data').serializeArray();

						var canAvSet = document.getElementById('cabs_set_AvailabilityReference').value;
				 
						console.log(canAvSet);

						// console.log( cabformrequest_data_var  );
						jQuery.ajax({
							type: "POST",
							//	             dataType: 'json',
							url: "/liberty_cars/wp-admin/admin-ajax.php",
							data: {
								action: "cabform_request_data_ajax_call_passanger",
								form_data: cabformrequest_data_var_passanger,
								//	form_data_req : cabformrequest_data_var,
								form_data_AvailabilityReference: canAvSet
							},
							success: function(data) { 
							

								var obj_pas = jQuery.parseJSON(data);
								//alert(data);
								var setAvRes = obj_pas.AvailabilityReference;

								console.log(data);
				 
								var BookingReference_pas = obj_pas.BookingReference;
								var AuthorizationReference = obj_pas.AuthorizationReference;

								jQuery("#response").append("  <br><br> <p> Booking Reference ID - " + BookingReference_pas + "</p> <p> Authorization Reference ID - " + AuthorizationReference + "</p>");

								  jQuery("#wait-pas").removeClass("display-block");
								jQuery("#wait-pas").addClass("display-none");
								jQuery("#book-now-btn-id").addClass("display-block");				
								//jQuery("#book-now-btn-id").removeClass("display-none");		
 
								
							}
						});
						return false;
		
		 
				
				/////////// pas ajx ends //////////////////


	        }
	    });
	    return false;			
				
				
				
				
				
				
				
				
				
				
				

		
		
		
		
		
		
		
	}

 
	function selected_vehicle(veh, avref) { 
	
	//	document.getElementById('book-now-btn-id').style.display="none"; 	
		jQuery("div .car-blk img").removeClass("add-opacity-booking");
	    jQuery("#"+veh+" img").addClass("add-opacity-booking");
 	    event.preventDefault();
		
		document.getElementById('cabs_set_selected_vehicle').value = veh;

 	 //   ajaxSubmit_set_Reference(veh);
 

	}



/*
	function ajaxSubmit_set_Reference(passed_vehi_type) {
		

		

	    var cabformrequest_vehicle_type_data_var = passed_vehi_type;

	    var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();


	    jQuery.ajax({
	        type: "POST",
	        //           dataType: 'json',
	        url: "/liberty_cars/wp-admin/admin-ajax.php",
	        data: {
	            action: "cabform_request_data_ajax_call",
	            form_data: cabformrequest_data_var,
	            veh_type: cabformrequest_vehicle_type_data_var
	        },
	        success: function(data) {

	            var obj = jQuery.parseJSON(data);
	            console.log(obj);

	            var setAvRes = obj.AvailabilityReference;
				
				///do this last along with pass data

	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
	            console.log(setAvRes);

				document.getElementById('book-now-btn-id').style.display="block";


	        }
	    });
	    return false;



	}

*/
	function ajaxSubmit_loop(passed_vehi_type) {


	    //	var vehicleTypes=array();
	    var cabformrequest_vehicle_type_data_var = passed_vehi_type;
	    //alert(cabformrequest_vehicle_type_data_var);

	    var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();
	    console.log(cabformrequest_data_var);

	    //console.log(cabformrequest_data_var);


	    jQuery.ajax({
	        type: "POST",
	        //           dataType: 'json',
	        url: "/liberty_cars/wp-admin/admin-ajax.php",
	        data: {
	            action: "cabform_request_data_ajax_call",
	            form_data: cabformrequest_data_var,
	            veh_type: cabformrequest_vehicle_type_data_var
	        },
	        success: function(data) {
				

 
	            var obj = jQuery.parseJSON(data);


	            console.log(obj);
	            var setAvRes = obj.AvailabilityReference;
	            var VehicleTypeDis = obj.VehicleType;
	            var PriceDis = obj.Pricing.Price;
				
				///show vehicles
 	            jQuery("#responseVehicles").append('<div class="car-blk" id="' + cabformrequest_vehicle_type_data_var + '" > <a href="javascript.void();" onclick="selected_vehicle(\'' + VehicleTypeDis + '\' ,\'' + setAvRes + '\' )" > <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/' + cabformrequest_vehicle_type_data_var + '.png"><div class="car-price-blk">   <p class="car-type">' + cabformrequest_vehicle_type_data_var + '</p><p class="car-price"> £ ' + PriceDis + '.00</p></div></a></div>');
 
	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
				
				
								
				//document.getElementById("wait").;
				jQuery("#wait").removeClass("display-block");
				jQuery("#wait").addClass("display-none");
				
				jQuery("#wait-g-q").removeClass("display-none");				
				jQuery("#wait-g-q").addClass("display-block");
 
	        }
	    });
	    return false;



	}

	function ajaxSubmit() {

				jQuery("#wait").removeClass("display-none");
				jQuery("#wait").addClass("display-block");
				
				jQuery("#wait-g-q").removeClass("display-block");				
				jQuery("#wait-g-q").addClass("display-none");
				
	    jQuery("#responseVehicles").html("");

	    //var yyu="";

	    ajaxSubmit_loop("Saloon");
	    ajaxSubmit_loop("Estate");
	    ajaxSubmit_loop("MPV");


	}

	function ajax_get_lo_la_maps(idTextField) {
	    console.log(idTextField);


	    ///whenever user enters text

	    ajaxSubmit();


	}


	window.onload = function() {
	    ajaxSubmit();
		jQuery( "#ac2" ).trigger( "click" );
	};
	
	var dots = window.setInterval( function() {
    var wait = document.getElementById("wait");
    if ( wait.innerHTML.length > 10 ) 
        wait.innerHTML = ".";
    else 
        wait.innerHTML += ".";
    }, 100);
	
	var dotsp = window.setInterval( function() {
    var waitp = document.getElementById("wait-pas");
    if ( wait.innerHTML.length > 5 ) 
        waitp.innerHTML = ".";
    else 
        waitp.innerHTML += ".";
    }, 100);
	
	
	
</script>
 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initialize"
        async defer></script>  