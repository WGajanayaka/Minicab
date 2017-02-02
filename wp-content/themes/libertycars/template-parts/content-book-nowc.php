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


    <div class="container fxd-blk">
      <div class="row">
        <div class="col-md-9 col-sm-9"></div>
        <div class="col-md-3 col-sm-3">

          <div class="fixed-price-block animated" id="add-f-class">
                <div class="top-blk">
                  <div class="row rw-tbl">
                    <div class="col-md-6 rw-col">
                      <label><strong>pickup time</strong></label>
                      <p><strong>27 minutes</strong></p>
                    </div>
                    <div class="col-md-6 rw-col border-left">
                      <label><strong>journey time</strong></label>
                      <p><strong>39 minutes</strong></p>
                    </div>
                  </div>
                </div>
                <div class="middle-blk">

                  <!-- ***** USE THE EXACT CLASSES FOR DESIGN *** -->

                  <!-- Checkd blocks goes here -->
                  <div class="cat-blk">
                    <div class="cat-bubble">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/check-circle.png">                    
                      <span></span>
                    </div>
                    <div class="cat-content">
                      <label><strong>from</strong></label>
                      <p>51 Hay Lane, London, Greater</p>

                      <label class="second-label"><strong>to</strong></label>
                      <p class="second-p">2 Quantock Court, Greenford</p>
                    </div>
                  </div>

                  <div class="cat-blk">
                    <div class="cat-bubble">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/check-circle.png">                    
                      <span></span>
                    </div>
                    <div class="cat-content">
                      <label><strong>car type</strong></label>
                      <p class="second-p">Standard Car</p>
                    </div>
                  </div>

                  <!-- From Here uncheck blocks goes -->
                  <div class="cat-blk uncheck">
                    <div class="cat-bubble">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/uncheck-circle.png">                    
                      <span></span>
                    </div>
                    <div class="cat-content">
                      <label><strong>passenger details</strong></label>
                      <p class="second-p">Information required</p>
                    </div>
                  </div>

                  <div class="cat-blk uncheck">
                    <div class="cat-bubble last">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/uncheck-circle.png">                    
                      <span></span>
                    </div>
                    <div class="cat-content">
                      <label><strong>payment details</strong></label>
                      <p class="second-p">Credit Card</p>
                    </div>
                  </div>

                  <input type="submit" class="add-promo-btn" name="" value="add promo code">                

                </div>               

                <div class="price-blk">
                  <span class="price">$21.10</span>
                  <br>                  
                  <button class="book-now-btn">Book now</button>  
                  <button class="close-btn-popup" id="close-btn-popup">close</button>                
                </div>

              </div>
          
        </div>
      </div>
    </div>


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
					  <input  id="ac1" class="autocomplete" type="text" name="cabs_FromDataAddress" value="<?php echo $_POST['cabs_DataAddress1']; ?>"><br> 
					  <input type="hidden" id="ac1_lat" value=""> 
					  <input type="hidden" id="ac1_lng" value=""> 
                  </div>
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown1">                    
                    <textarea placeholder="PICK UP NOTE"></textarea>
                  </div>



                  <div class="bib-common">
                    <label for="drop-down"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> drop off</label>
					
					  <input  id="ac2" class="autocomplete"  type="text" name="cabs_ToDataAddress" value="<?php echo $_POST['cabs_DataAddress2']; ?>"><br>
					  <input type="hidden" id="ac2_lat" value=""> 
					  <input type="hidden" id="ac2_lng" value="">  
					 
                  </div>
				  
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown2">                    
                    <textarea placeholder="DROP OFF NOTE"></textarea>
                  </div>   

                  <div class="bib-common bib-common-last">
                    <label for="pick-up"><i class="fa fa-calendar" aria-hidden="true"></i> pick-up date & time</label>
                    <input type="text" class="tourday" value="" name="" placeholder="2017-12-16T15:00:00">
                  </div>



                  <div class="bib-common text-center">                    
                    <button class="btn note-btn" id="note-btn">add note</button>
                    <button class="btn hidden note-btn" id="note-clear-btn">clear note</button>
                  </div>
                </div>
				
					   
				   <input type="hidden" name="cabs_passangerCount" value="1">
 
				   <input type="hidden" name="cabs_LuggageCount" value="1"> 				  
				 
				   <input type="hidden" name="cabs_Facilities" value="None"> 				  
				   
				   <input type="hidden" name="cabs_DriverType" value="Any"> 				  
				   
				   <input type="hidden" name="cabs_VehicleType" value="Saloon"> 
				    <div id="response"></br></div>

				</form>
	
	
                <!-- Select car -->
                <div class="booking-input-block select-car">                  
                  <h3 class="box-title"><i class="fa fa-car car-yello-icon no-anim" aria-hidden="true"></i> choose your car</h3>

                  <div class="car-wrapper">

				  
	 

				      <div id="responseVehicles">  
                    <!-- each car type has these blocks -->
                    <div class="car-blk" >
                      <a href="#" >
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/car1.png">
                        <div class="car-price-blk">
                          <p class="car-type">sallon</p>
                          <p class="car-price">$12.00</p>
                        </div>
                      </a>
                    </div>
                    <!-- each car type has these blocks End-->

                    <div class="car-blk">
                      <a href="#">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/car2.png">
                        <div class="car-price-blk">
                          <p class="car-type">estate</p>
                          <p class="car-price">$16.00</p>
                        </div>
                      </a>
                    </div>

                    <div class="car-blk">
                      <a href="#">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/car3.png">
                        <div class="car-price-blk">
                          <p class="car-type">mpv</p>
                          <p class="car-price">$18.00</p>
                        </div>
                      </a>
                    </div>

                    <div class="car-blk">
                      <a href="#">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/car4.png">
                        <div class="car-price-blk">
                          <p class="car-type">coach</p>
                          <p class="car-price">$12.00</p>
                        </div>
                      </a>
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
                      <input type="text" id="pick-up" name="cabs_Name" value="John Doe">
                    </div>
					
  
                    <div class="bib-common">
                      <label for="drop-off"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i> email</label>
                      <input type="text" id="drop-off" name="cabs_EmailAddress" value="john.doe@gmail.com">
                    </div>

                    <div class="bib-common bib-common-last">
                      <label for="pick-up"><i class="fa fa-phone-square fa-lg fa-fw" aria-hidden="true"></i> mobile number</label>
                      <input type="text" id="pick-up" name="cabs_TelephoneNumber" value="+441234567890">
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


                <!-- Payment Details  
                <div class="booking-input-block">     

                  <h3 class="box-title"><i class="fa fa-check-circle car-yello-icon no-anim" aria-hidden="true"></i> payment details</h3>

                  <div class="blk-car-pattern">

                    <div class="select-payment-method">
                      <button class="btn btn-default cash" type="submit">cash</button>
                      <button class="btn btn-default card" type="submit">card</button>
                      <button class="btn btn-default paypal" type="submit">paypal</button>
                    </div>

                    <h5 class="payment-det-h5">credit card details</h5>
                    <div class="bib-common bib-common-last">
                      <label for="pick-up" id="bd-crd-holder"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> card holder name</label>                      
                      <input type="text" id="pick-up" name="" placeholder="Enter name">
                    </div>

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

                  </div>

                </div>

                -->
				
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
   <script>
	
			//		alert(23234);

	      var placeSearch, autocomplete;
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

    for (var i = 0; i < acInputs.length; i++) {
		
		
	
		
		

        var autocomplete2 = new google.maps.places.Autocomplete(acInputs[i],            {types: ['geocode']});
      //  autocomplete2.inputId = acInputs[i].id;
	  
	  
	  
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
          });
        }
		
		
		

        google.maps.event.addListener(autocomplete2, 'place_changed', function () {
			
			
			
			
			
			        var place2 = autocomplete2.getPlace();

        for (var component in componentForm) {
	 
        }
 			 

	   
							/// update vehicles whenever user enters new addresss
							  ajaxSubmit();	
 		 

        });
    }
}

//initialize();

	
 
	 



    </script>
	

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initialize"
        async defer></script>
 
 
 
 
 
 
 
 
 
 
 
 <script type="text/javascript">
 
 
 jQuery(".car-blk").click(function() {
  //jQuery( this ).slideUp();
        event.preventDefault();

  alert(1212);
  
});
              
                   
                 

 
    jQuery('#cabformrequest_data').submit(ajaxSubmit);
    jQuery('#cabformrequest_passanger_data').submit(ajaxSubmit_pas);
 //console.log(jQuery( '#cabformrequest_passanger_data').serializeArray());
    function ajaxSubmit_pas(){
		
 		
        var cabformrequest_data_var_passanger = jQuery( '#cabformrequest_passanger_data').serializeArray();
		//var cabformrequest_data_var = jQuery( '#cabformrequest_data').serializeArray();

		var canAvSet=document.getElementById('cabs_set_AvailabilityReference').value;
		
		
		//canAvSet=
	  alert(canAvSet);

 	  // console.log( cabformrequest_data_var  );
        jQuery.ajax({
             type   : "POST",
		//	             dataType: 'json',
             url    : "/liberty_cars/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call_passanger",
					form_data : cabformrequest_data_var_passanger,
				//	form_data_req : cabformrequest_data_var,
					form_data_AvailabilityReference : canAvSet
					},	
			    success: function(data){
					
				// alert(data);
            //    jQuery("#response").html(data);
				 
				 			    
				var obj_pas = jQuery.parseJSON(data);
				//alert(data);
  				 var setAvRes=obj_pas.AvailabilityReference;
				 
				 console.log(data);
				 
				//var Result_pas=obj_pas.Success;
				var BookingReference_pas=obj_pas.BookingReference;
				var AuthorizationReference=obj_pas.AuthorizationReference;
				 
				jQuery("#response").append("<p style='color:green'> Success </p> <p> Booking Reference ID - "+BookingReference_pas+"</p> <p> Authorization Reference ID - "+AuthorizationReference+"</p>");
				  
            }
        });
        return false;
    }
	
	
	
	function selected_vehicle(veh,avref){
		
		//alert(veh);
		//cabs_AvailabilityReference_
		 //document.getElementById('cabs_set_AvailabilityReference').value=avref;
		//  alert(avref);
		
		 ajaxSubmit_set_Reference(veh);
		//cabs_set_AvailabilityReference();
		

	}
	
 
				
				
	
	function ajaxSubmit_set_Reference(passed_vehi_type){
		
		
 		var cabformrequest_vehicle_type_data_var=passed_vehi_type;
 
        var cabformrequest_data_var = jQuery( '#cabformrequest_data').serializeArray();
 
		
        jQuery.ajax({
             type   : "POST",
		 	  //           dataType: 'json',
             url    : "/liberty_cars/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call",
					form_data : cabformrequest_data_var,
					veh_type : cabformrequest_vehicle_type_data_var
					},	
			    success: function(data){
 			    
				var obj = jQuery.parseJSON(data);
 			 console.log(obj);

  			 var setAvRes=obj.AvailabilityReference;
  
			  document.getElementById('cabs_set_AvailabilityReference').value=setAvRes;
  			 console.log(setAvRes);
  		 

			 
            }
        });
        return false;
 
		
	}
	
		function ajaxSubmit_loop(passed_vehi_type){
		
		
			//	var vehicleTypes=array();
	 	var cabformrequest_vehicle_type_data_var=passed_vehi_type;
		//alert(cabformrequest_vehicle_type_data_var);
		
       var cabformrequest_data_var = jQuery( '#cabformrequest_data').serializeArray();
 	    console.log( cabformrequest_data_var  );
	  
   //	console.log(cabformrequest_vehicle_type_data_var);

		
        jQuery.ajax({
             type   : "POST",
		 	  //           dataType: 'json',
             url    : "/liberty_cars/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call",
					form_data : cabformrequest_data_var,
					veh_type : cabformrequest_vehicle_type_data_var
					},	
			    success: function(data){
							
				//  var obj = jQuery.parseJSON('{"Agent":{"@attributes":{"Id":"300999"},"Reference":"12399999999999999","Time":"2016-12-12T15:04:57.123Z"},"Result":{"Success":"true"},"Vendor":{"@attributes":{"Id":"700999"}},"AvailabilityReference":"501e2e7e-08f9-4fd4-813e-a4eba88c6da3","Pricing":{"PricingMethod":"EstimatedMetered","Price":"0","Commission":"0","Gratuity":"0","Currency":"GBP"},"EstimatedJourney":{"Distance":"784","Duration":"10"},"VehicleType":"Saloon","VehicleCategory":"Standard","AvailableEvents":"BookingDispatched LocationUpdate VehicleArrived PassengerOnBoard NoFare BookingCompleted BookingCancelled","ExpiryTime":"2016-12-20T06:10:19.1301727Z","VendorDetails":{"Name":"Default Liverpool 8 Test","Address":"Test Vendor 00999 Address","Description":"Test Vendor 00999 Description","TelephoneNumber":{},"EmailAddress":{},"Fleet":{"Count":"100","Uniform":"Unknown","Vehicles":{"VehicleInformation":[{"Make":"Ford","Model":"Galaxy","Count":"5"},{"Make":"VW","Model":"Campavan","Count":"3"},{"Make":"Renault","Model":"Espace","Count":"3"},{"Make":"Renault","Model":"Clio","Count":"2"},{"Make":"Citreon","Model":"DS3","Count":"2"},{"Make":"Vauxhall","Model":"Insignia","Count":"2"},{"Make":"KZCPGJRT","Model":"KJNLYVNI","Count":"1"},{"Make":"SVDUOOFT","Model":"NERRKUPX","Count":"1"},{"Make":"ZPYGGBPB","Model":"WAOCEDIC","Count":"1"},{"Make":"AGLQGJBW","Model":"YDZIBLKS","Count":"1"}]}},"Rating":"ThreeStar"}}');
			    
				var obj = jQuery.parseJSON(data);
 
			
			 console.log(obj);
  			 var setAvRes=obj.AvailabilityReference;
			 var VehicleTypeDis=obj.VehicleType;
			 var PriceDis=obj.Pricing.Price;
			jQuery("#responseVehicles").append("<p> <input type='hidden' name='cabs_AvailabilityReference_"+VehicleTypeDis+"'  id='cabs_AvailabilityReference_"+VehicleTypeDis+"' value='"+setAvRes+"'> <a onclick='selected_vehicle(\""+VehicleTypeDis+"\" ,\""+setAvRes+"\" )' > Vehicle Type  :   "+VehicleTypeDis+" </a> |  Price :  "+PriceDis+" </p> ");
			 
			  document.getElementById('cabs_set_AvailabilityReference').value=setAvRes;			
			 
 
            }
        });
        return false;
		
		
		
	}
	
    function ajaxSubmit(){
		
	 
		
		 jQuery("#responseVehicles").html("");

		//var yyu="";
	 	ajaxSubmit_loop("Saloon");
	 	ajaxSubmit_loop("Estate");
	  	ajaxSubmit_loop("MPV");
	 

    }
	
	    function ajax_get_lo_la_maps(idTextField){
			console.log(idTextField);
			
			
			///whenever user enters text
			
			  ajaxSubmit();

 
    }
	
	
window.onload = function() {
  ajaxSubmit();
};

	
</script>
