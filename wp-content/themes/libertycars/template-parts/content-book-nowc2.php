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
 					   <input type="hidden" name="cabs_BookingTime" value="2017-03-16T15:00:00"> 
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
                    <input type="text" class="tourday" value="" name="" placeholder="">
                  </div>



                  <div class="bib-common text-right">                    
                   <!-- <button class="btn note-btn" id="note-btn">add note</button> -->

<button type="button" onclick="ajaxSubmit()" class="btn btn-default">Get Quotes <i class="fa fa-arrow-right" aria-hidden="true"></i></button>

                    <button class="btn hidden note-btn" id="note-clear-btn">clear note</button>
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
			

                    
                  </div><br><br>  
				  
				  <input type="submit" value="Book Now" class="book-now-btn" style="color:white;">

   				    <div id="response"></div>

 </form>
 
  <br><br><br>
  <a href="/liberty_cars/book-now/" target="_blank"> Cancel booking  </a> | 
     <a href="/liberty_cars/book-now/" target="_blank"> Booking Status </a>

  
 
                </div>


 
              </div>
            </div>
          </div>


          <div class="col-lg-7 col-md-8 remove-padding-right rmv-padding-left-ipd table-col">

            <div class="mobile-promocode" id="mobile-promocode">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> add your promocode
            </div>

            <div class="map-block animated" id="scroling-img">              
              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63320.99203996233!2d80.59870647749875!3d7.290570152856939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!3m2!1d7.2905714999999995!2d80.6337262!4m0!5e0!3m2!1sen!2slk!4v1483463835187" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
                                    
          </div>

        </div>
      </div>
    </div>

    <!-- PAGE CONTENT END-->

    <div id="fxd-blk-f-remove"></div>
	
	
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

	function initialize() {

	    var acInputs = document.getElementsByClassName("autocomplete");



	    var autocomplete2 = new google.maps.places.Autocomplete(acInputs[1], {
	        types: ['geocode']
	    });
	    var autocomplete1 = new google.maps.places.Autocomplete(acInputs[0], {
	        types: ['geocode']
	    });



	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(function(position) {
	            var geolocation = {
	                lat: position.coords.latitude,
	                lng: position.coords.longitude
	            };
	            var circle = new google.maps.Circle({
	                center: geolocation,
	                radius: position.coords.accuracy
	            });
	            autocomplete2.setBounds(circle.getBounds());
	            autocomplete1.setBounds(circle.getBounds());
	        });
	    }

 
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

	            jQuery("#response").append("  <p> Booking Reference ID - " + BookingReference_pas + "</p> <p> Authorization Reference ID - " + AuthorizationReference + "</p>");

	        }
	    });
	    return false;
	}

 
	function selected_vehicle(veh, avref) { 
	
	
	    jQuery("#"+veh+"").addClass("add-opacity-booking");
 	    event.preventDefault();
 
 	    ajaxSubmit_set_Reference(veh);
 

	}




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

	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
	            console.log(setAvRes);



	        }
	    });
	    return false;


	}

	function ajaxSubmit_loop(passed_vehi_type) {


	    //	var vehicleTypes=array();
	    var cabformrequest_vehicle_type_data_var = passed_vehi_type;
	    //alert(cabformrequest_vehicle_type_data_var);

	    var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();
	    console.log(cabformrequest_data_var);

	    //	console.log(cabformrequest_vehicle_type_data_var);


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
 	            jQuery("#responseVehicles").append('<div class="car-blk" id="' + cabformrequest_vehicle_type_data_var + '" > <a href="javascript.void();" onclick="selected_vehicle(\'' + VehicleTypeDis + '\' ,\'' + setAvRes + '\' )" > <img class="img-responsive" src="/<?php bloginfo('
	                get_template_directory_uri '); ?>/images/' + cabformrequest_vehicle_type_data_var + '.png"><div class="car-price-blk">   <p class="car-type">' + cabformrequest_vehicle_type_data_var + '</p><p class="car-price">$' + PriceDis + '.00</p></div></a></div>');
 
	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
 
	        }
	    });
	    return false;



	}

	function ajaxSubmit() {



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
	};
	
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initialize"
        async defer></script>