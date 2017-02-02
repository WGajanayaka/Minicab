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
                
                  <?php /* Primary navigation */
                  wp_nav_menu( array(
                      'menu' => 'top_menu',
                      'depth' => 2,
                      'container' => false,
                      'menu_class' => 'nav navbar-nav',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker())
                  );
                  ?>
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
					  <input  id="ac1" class="autocomplete" type="text" name="cabs_FromDataAddress" value="<?php if(isset($_POST['cabs_DataAddress1'])){ echo $_POST['cabs_DataAddress1']; } ?>">
					  <input type="hidden" id="ac1_lat" name="ac1_lat" value="<?php  if(isset($_POST['ac1_lat'])){ echo $_POST['ac1_lat']; } ?>"> 
					  <input type="hidden" id="ac1_lng" name="ac1_lng" value="<?php  if(isset($_POST['ac1_lng'])){ echo $_POST['ac1_lng']; } ?>"> 
                  </div>
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown1">                    
                    <textarea placeholder="PICK UP NOTE"></textarea>
                  </div>



                  <div class="bib-common">
                    <label for="drop-down"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> drop off</label>
					
					  <input  id="ac2" class="autocomplete"  type="text" name="cabs_ToDataAddress" value="<?php if(isset($_POST['cabs_DataAddress2'])){ echo $_POST['cabs_DataAddress2']; } ?>">
					  <input type="hidden" id="ac2_lat" name="ac2_lat" value="<?php  if(isset($_POST['ac2_lat'])){ echo $_POST['ac2_lat']; } ?>"> 
					  <input type="hidden" id="ac2_lng" name="ac2_lng" value="<?php  if(isset($_POST['ac2_lng'])){ echo $_POST['ac2_lng']; } ?>">  
					 
                  </div>
				  
                  <div class="bib-common withnotes hidden animated" id="add-notes-dropdown2">                    
                    <textarea placeholder="DROP OFF NOTE"></textarea>
                  </div>   

                  <div class="bib-common bib-common-last">
                    <label for="pick-up"><i class="fa fa-calendar" aria-hidden="true"></i> pick-up date & time</label>
                    <input type="text"   id="cabs_BookingTime" class="tourday" name="cabs_BookingTime" value="<?php  if(isset($_POST['cabs_BookingTime'])){ echo $_POST['cabs_BookingTime']; } ?>">
                  </div>


							<span id="wait" class="display-none">
							.
							</span>
                  <div class="bib-common text-right">                    
                   <!-- 
				   <button class="btn note-btn" id="note-btn">add note</button>                   
				   <button class="btn hidden note-btn" id="note-clear-btn">clear note</button>
-->
  
		<button id="wait-g-q" type="button" onclick="ajaxSubmit()" class="btn btn-default">Calculate <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
<span id="validate-j-d" class="display-none" >  </span>

  
                   </div>
                </div>
	   			<input type="hidden" name="cabs_passangerCount" value="1">
 
				   <input type="hidden" name="cabs_LuggageCount" value="1"> 				  
				 
				   <input type="hidden" name="cabs_Facilities" value="None"> 				  
				   
				   <input type="hidden" name="cabs_DriverType" value="Any"> 				  
				   
				   <input type="hidden" name="cabs_VehicleType" value="Saloon"> 
				   
				   <input type="hidden" name="cabs_veh_ref" value="<?php echo 'ref';echo time(); ?>"> 

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

					<span id="validate-j-d-p" class="display-none" >  </span>


					<input type="hidden" name="cabs_IsLead" value="true">
		 					 			<div class="bib-common">
						<label for="pick-up"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> name</label>                      
						<input type="text"  name="cabs_Name" id="cabs_Name" value="">
					</div>
					<div class="bib-common">
					  <label for="drop-off"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i> email</label>
					  <input type="text" name="cabs_EmailAddress" id="cabs_EmailAddress" value="">
					</div>

					<div class="bib-common bib-common-last">
					  <label for="pick-up"><i class="fa fa-phone-square fa-lg fa-fw" aria-hidden="true"></i> Contact Number </label>
					  <input type="text" name="cabs_TelephoneNumber" id="cabs_TelephoneNumber" value="">
					</div>
							
					<div class="bib-common bib-common-last">
					  <label class="special-label" for="pick-up"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> 
					  <span class="special-span">Special Requirements</span> </label>
					  <!-- <input type="text" value=""> -->
					  <textarea name="cabs_DriverNote" id="cabs_DriverNote" rows="3"></textarea>
					</div>
					
				   	<div class="bib-common bib-common-last bib-terms">
					  <input type="checkbox" name="cabs_DriverNote" id="cabs_DriverNote" value=""> 
					  Agree to <a href="/terms-and-conditions"> terms and conditions </a>
					</div>
					
				   	<input type="hidden" name="cabs_VendorEvents" value="BookingDispatched NoFare BookingCompleted BookingCancelled"> 	 
					<input type="hidden" name="cabs_AlertMethod" value="Textback">						 
					<input type="hidden" name="cabs_AgentEvents" value="LocationUpdate VehicleArrived PassengerOnBoard"> 
				   	<input type="hidden" name="cabs_AgentBookingReference" value="AgentBookingRefd"> 
					<input type="hidden" id="cabs_BoReference" name="cabs_BoReference" value="<?php echo 'ref';echo time(); ?>"> 
					<input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value="">
					<input type="hidden" name="cabs_set_selected_vehicle" id="cabs_set_selected_vehicle" value=""> 
				</div>
			</form>  
		</div>
		<?php include 'content-payment.php'; ?>
	</div>
      </div>
   </div>


          <div class="col-lg-7 col-md-8 remove-padding-right rmv-padding-left-ipd table-col">

            <div class="mobile-promocode" id="mobile-promocode">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> add your promocode
            </div>

            <div class="map-block animated" id="scroling-img">              
	          	<div id="map"></div>
			</div>
                                    
          </div>

        </div>
      </div>
    </div>

    <!-- PAGE CONTENT END-->

    <div id="fxd-blk-f-remove"></div>
	
	

<!-- Replace the value of the key parameter with your own API key. -->
<!--
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjm1dV_BuIcEW5IYzS3z67lfj2vmnwRTY&callback=initMap">
-->
</script>
<script type="text/javascript">
// Page Varuables 

var ConsumerReference = "";
var PaymentReference = "";
var amount = "";
var vehicleType = "";



function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: {lat: 51.507351, lng: -0.127758},
    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#ffeb3b"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#ffbf02"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
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

	//////////////////////////////gm	/////////////////////// 

	var placeSearch, autocomplete,autocomplete2;
	var componentForm = {
	    street_number: 'short_name',
	    route: 'long_name',
	    locality: 'long_name',
	    administrative_area_level_1: 'short_name',
	    country: 'long_name',
		types: ['address'],
		
	    postal_code: 'short_name'
	};

	function initialize() {

		initMap();
		/*
		var acInputs = document.getElementsByClassName("autocomplete");
		
		var autocomplete2 = new google.maps.places.Autocomplete(acInputs[1], {
	        	types: ['geocode'], componentRestrictions: {country: 'uk'}
	    	});
	    
	    	var autocomplete1 = new google.maps.places.Autocomplete(acInputs[0], {
	        	types: ['geocode'], componentRestrictions: {country: 'uk'}
	    	});
	 
	 	/*
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
			var country='uk';
			    autocomplete2.setComponentRestrictions({'country': country});
				map.setCenter(countries[country].center);
				map.setZoom(countries[country].zoom);
			
		
  
	    	google.maps.event.addListener(autocomplete2, 'place_changed', function() {
		        var place2 = autocomplete2.getPlace();       
	        	var loc = place2.geometry.location;
		        document.getElementById("ac2_lat").value = place2.geometry.location.lat();
		        document.getElementById("ac2_lng").value = place2.geometry.location.lng();
 	        	/// update vehicles whenever user enters new addresss
	        	ajaxSubmit();
		});

	    	google.maps.event.addListener(autocomplete1, 'place_changed', function() {
	        	var place1 = autocomplete1.getPlace();
	        	var loc = place1.geometry.location;
	        	//console.log(loc);
	        	document.getElementById("ac1_lat").value = place1.geometry.location.lat();
	        	document.getElementById("ac1_lng").value = place1.geometry.location.lng();
 	        	ajaxSubmit();
		});
		*/
	}


	//initialize();

	//////////////////////////////gm ends/////////////////////// 

	jQuery('#cabformrequest_data').submit(ajaxSubmit);
	//jQuery('#cabformrequest_passanger_data').submit(ajaxSubmit_pas);
	//console.log(jQuery( '#cabformrequest_passanger_data').serializeArray());
	
	function ajaxSubmit_pas() {

		var isFormValidated=validate_pas();		
		if(isFormValidated==0){

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
		        url: "/wp-admin/admin-ajax.php",
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
					url: "/wp-admin/admin-ajax.php",
					data: {
						action: "cabform_request_data_ajax_call_passanger",
						form_data: cabformrequest_data_var_passanger,
						form_data_req : cabformrequest_data_var,
						veh_type : cabformrequest_vehicle_type_data_var,
						form_data_AvailabilityReference: canAvSet
					},
					success: function(data) { 
					
						var obj_pas = jQuery.parseJSON(data);
						//alert(data);
						var setAvRes = obj_pas.AvailabilityReference;
	
						console.log(obj_pas);
		 
						var BookingReference_ref = obj_pas.Agent.Reference;
						var BookingReference_pas = obj_pas.BookingReference;
						var AuthorizationReference = obj_pas.AuthorizationReference;
	
						jQuery("#response").append("<br><br> <p> Reference ID - " + BookingReference_ref + "</p> <p> Booking Reference ID - " + 
							BookingReference_pas + "</p>  <p> Authorization Reference ID - " + AuthorizationReference + "</p>");
	
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
	} else {
			
			jQuery("#validate-j-d-p").removeClass("display-none");
			 jQuery("#validate-j-d-p").addClass("display-block");	
			//jQuery("#validate-j-d").fadeIn(500);	
			
		}
	
	}

 	
	function validate_journey(){
		
		var mes=0;
		
 		//			document.getElementById('validate-j-d').innerHTML=555;

		 if( document.getElementById('ac1').value == "" )
         {
            mes="Error : PICK UP field empty";
			document.getElementById('validate-j-d').innerHTML=mes;

 			
         }  
		 
		 if(document.getElementById('ac2').value == "" ){
			 
            mes="Error :  DROP OFF field empty";
			document.getElementById('validate-j-d').innerHTML=mes;

 			 
		 } 
		 
		 if (document.getElementById('cabs_BookingTime').value == ""){
			 
			 //add to trxtfield id this
            mes="Error :  Date field empty";
			document.getElementById('validate-j-d').innerHTML=mes;

 			 
		 }
		 
		 return mes;
	
		
	}

	function validate_pas(){
		
				 var mes=0;

		 if( document.getElementById('cabs_Name').value == "" )
         {
            mes="Error : Name field empty";
			document.getElementById('validate-j-d-p').innerHTML=mes;

 			
         }  
		  if( document.getElementById('cabs_EmailAddress').value == "" )
         {
            mes="Error : Email field empty";
			document.getElementById('validate-j-d-p').innerHTML=mes;
			

 			
         }  
		 
		  if(document.getElementById('cabs_EmailAddress').value !== "")
		{
			
			 var emailID =document.getElementById('cabs_EmailAddress').value;
			 atpos = emailID.indexOf("@");
			 dotpos = emailID.lastIndexOf(".");
			 
			 if (atpos < 1 || ( dotpos - atpos < 2 )) 
			 {
				mes="Please enter correct email ID";
				document.getElementById('validate-j-d-p').innerHTML=mes;

			 }
		 
		}
		
		
		 
		  if( document.getElementById('cabs_TelephoneNumber').value == "" )
         {
            mes="Error : Telephone Number field empty";
			document.getElementById('validate-j-d-p').innerHTML=mes;

 			
         }  
		 
	 
		 		 return mes;

		 
	}


 	function selected_vehicle(veh, avref) { 
	
			event.preventDefault();
	
		var ret=validate_journey();
		
		if(ret==0){
			
		jQuery("#validate-j-d").removeClass("display-block");
		jQuery("#validate-j-d").addClass("display-none");
			//document.getElementById('book-now-btn-id').style.display="none"; 	
		jQuery("div .car-blk img").removeClass("add-opacity-booking");
		jQuery("#"+veh+" img").addClass("add-opacity-booking");
		
		amount =parseFloat(jQuery("#"+veh+" .car-price").text().replace("£",""));
		
		//alert(amount);
		
	 //	event.preventDefault();
		document.getElementById('cabs_set_selected_vehicle').value = veh;
		
		} else {
			
			jQuery("#validate-j-d").removeClass("display-none");
			 jQuery("#validate-j-d").addClass("display-block");	
			//jQuery("#validate-j-d").fadeIn(500);	
			
		}
		
  		

 	}

	/*
	function ajaxSubmit_set_Reference(passed_vehi_type) {
	    var cabformrequest_vehicle_type_data_var = passed_vehi_type;
	    var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();
	    jQuery.ajax({
	        type: "POST",
	        //           dataType: 'json',
	        url: "/wp-admin/admin-ajax.php",
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
	        url: "/wp-admin/admin-ajax.php",
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
 	            jQuery("#responseVehicles").append('<div class="car-blk" id="' + cabformrequest_vehicle_type_data_var + '" > <a href="javascript.void();" onclick="selected_vehicle(\'' + VehicleTypeDis + '\' ,\'' + setAvRes + '\' )" > <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/' + cabformrequest_vehicle_type_data_var + '.png"><div class="car-price-blk">   <p class="car-type">' + cabformrequest_vehicle_type_data_var + '</p><p class="car-price"> £ ' + (parseFloat(PriceDis)/100).toFixed(2) + '</p></div></a></div>');
 
	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
							
			//document.getElementById("wait").;
			jQuery("#wait").removeClass("display-block");
			jQuery("#wait").addClass("display-none");
			
			//jQuery("#wait-g-q").removeClass("display-none");				
			jQuery("#wait-g-q").addClass("display-block");
 
	        }
	    });
	    return false;
	}

	function ajaxSubmit() {
		jQuery("#wait").removeClass("display-none");
		jQuery("#wait").addClass("display-block");
	
		jQuery("#wait-g-q").removeClass("display-block");				
		//jQuery("#wait-g-q").addClass("display-none");
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
		
		jQuery("#wait").removeClass("display-block");
		jQuery("#wait").addClass("display-none");

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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjm1dV_BuIcEW5IYzS3z67lfj2vmnwRTY&callback=initMap">
</script>