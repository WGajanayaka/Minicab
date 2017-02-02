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
										<input type="text"   id="cabs_BookingTime" class="tourday" name="cabs_BookingTime" value="<?php  if(isset($_POST['cabs_BookingTime'])){ echo $_POST['cabs_BookingTime']; } ?>">
									</div>
									<span id="wait" class="display-none">.</span>
									<div class="bib-common text-right">                    
										<button id="wait-g-q" type="button" onclick="ajaxSubmit()" class="btn btn-default">Calculate<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
										<br>
										<span id="validate-j-d" class="display-none" ></span>  
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
										<span id="validate-j-d-p" class="display-none" ></span>
										<input type="hidden" name="cabs_IsLead" value="true"><br>
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
											<label for="pick-up"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> Special Requirements </label>
											<input type="text" name="cabs_DriverNote" id="cabs_DriverNote" value="">
										</div>
										<div class="bib-common bib-common-last">										
											<input type="checkbox" name="AgreeTerms" id="AgreeTerms" value="Yes"> 
											Agree to <a href="/terms-and-conditions"> terms and conditions </a>
										</div>					
										<input type="hidden" name="cabs_VendorEvents" value="BookingDispatched NoFare BookingCompleted BookingCancelled"> 	 
										<input type="hidden" name="cabs_AlertMethod" value="Textback">						 
										<input type="hidden" name="cabs_AgentEvents" value="LocationUpdate VehicleArrived PassengerOnBoard"> 
										<input type="hidden" name="cabs_AgentBookingReference" value="AgentBookingRefd"> 
										<input type="hidden" id="cabs_BoReference" name="cabs_BoReference" value="<?php echo 'ref';echo time(); ?>"> 
										<input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value="">
										<input type="hidden" name="cabs_set_selected_vehicle" id="cabs_set_selected_vehicle" value=""> 
										<input type="hidden" name="cabs_set_selected_vehicle_p" id="cabs_set_selected_vehicle_p" value=""> 
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
	
<script type="text/javascript">

var ConsumerReference = "";
var PaymentReference = "";
var amount = "";
var vehicleType = "";

function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: {lat: 51.507351, lng: -0.127758}
  });
  
  directionsDisplay.setMap(map);
  
  var onChangeHandler = function() {  
	calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  
  document.getElementById('ac1').addEventListener('click', onChangeHandler);
  document.getElementById('ac2').addEventListener('click', onChangeHandler);
  document.getElementById('wait-g-q').addEventListener('click', onChangeHandler); 
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
	directionsService.route({
		origin: document.getElementById('ac1').value,
		destination: document.getElementById('ac2').value,
		travelMode: 'DRIVING'
	}, 
	function(response, status) {
		if (status === 'OK') {
			directionsDisplay.setDirections(response);
		} else {
			console.log('Directions request failed due to ' + status);
		}
	});
}

function ajaxSubmit_pas() {

	var isFormValidated = validate_pas();		
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
		    url: "/liberty_cars/wp-admin/admin-ajax.php",
		    data: {
				action: "cabform_request_data_ajax_call",
		        Form_data: cabformrequest_data_var,
		        veh_type: cabformrequest_vehicle_type_data_var
		    },
		    success: function(data) {
				var obj = jQuery.parseJSON(data);
		        console.log(obj);
				var setAvRes = obj.AvailabilityReference;
					
			    //do this last along with pass data
	           	document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
		        console.log(setAvRes);
							
				var cabformrequest_data_var_passanger = jQuery('#cabformrequest_passanger_data').serializeArray();
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
						form_data_req : cabformrequest_data_var,
						veh_type : cabformrequest_vehicle_type_data_var,
						form_data_AvailabilityReference: canAvSet
					},
					success: function(data) {
						console.log(data); 
						var obj_pas = jQuery.parseJSON(data);

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
	 				},
					error: function (XMLHttpRequest, textStatus, errorThrown) {
						if (textStatus == 'Unauthorized') {
							alert('Booking Request Faild. Error: ' + errorThrown);
						} else {
							alert('Booking Request Faild. Error: ' + errorThrown);
						}
					}
				});
				return false;
			}
		});
	    return false;			
	} else {
		jQuery("#validate-j-d-p").removeClass("display-none");
		jQuery("#validate-j-d-p").addClass("display-block");	
	}
}

function validate_journey(showError){
	var isValied = true;
	var validationMessage = "";
	
	if( document.getElementById('ac1').value == "" )
    {
		validationMessage = "Error : PICK UP field empty<br/>";
		isValied= false;
    }  
		 
	if(document.getElementById('ac2').value == "" ){
        validationMessage = "Error :  DROP OFF field empty <br/>";
		isValied= false;
	} 
	
	if (document.getElementById('cabs_BookingTime').value == ""){
        validationMessage = "Error :  Date field empty";	
		isValied= false;
	}
	if(!isValied && showError)
		document.getElementById('validate-j-d').innerHTML = validationMessage;
	return isValied;
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


 	function selected_vehicle(veh, avref, price_lc){ 
		//alert(amount);
		event.preventDefault();
		var ret=validate_journey();
		
		//if(ret==0){
			
		jQuery("#validate-j-d").removeClass("display-block");
		jQuery("#validate-j-d").addClass("display-none");
			//document.getElementById('book-now-btn-id').style.display="none"; 	
		jQuery("div .car-blk img").removeClass("add-opacity-booking");
		jQuery("#"+veh+" img").addClass("add-opacity-booking");
		
		amount =parseFloat(jQuery("#"+veh+" .car-price").text().replace("£",""));
		
		//alert(amount);
		
	 //	event.preventDefault();
		document.getElementById('cabs_set_selected_vehicle').value = veh;
		document.getElementById('cabs_set_selected_vehicle_p').value = price_lc;
		
		//} else {
			
		//	jQuery("#validate-j-d").removeClass("display-none");
		//	 jQuery("#validate-j-d").addClass("display-block");	
		//	//jQuery("#validate-j-d").fadeIn(500);				
		//}
 	}

	function ajaxSubmit_loop(passed_vehi_type) {
	    var cabformrequest_vehicle_type_data_var = passed_vehi_type;
	    var cabformrequest_data_var = jQuery('#cabformrequest_data').serializeArray();
	  
	    console.log(cabformrequest_data_var);

	    jQuery.ajax({
	        type: "POST",
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
				
		    //Show Vehicles With Prices
 	            jQuery("#responseVehicles").append('<div class="car-blk" id="' + cabformrequest_vehicle_type_data_var + '" ><a href="javascript.void();" onclick="selected_vehicle(\'' + VehicleTypeDis + '\' ,\'' + setAvRes + '\'  ,\'' + PriceDis+ '\' )" ><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/' + cabformrequest_vehicle_type_data_var + '.png"> 	            <div class="car-price-blk">   <p class="car-type">' + cabformrequest_vehicle_type_data_var + '</p><p class="car-price"> £ ' + PriceDis + '.00</p></div></a></div>');
             
	            document.getElementById('cabs_set_AvailabilityReference').value = setAvRes;
							
		    jQuery("#wait").removeClass("display-block");
		    jQuery("#wait").addClass("display-none");
			
		    jQuery("#wait-g-q").removeClass("display-none");				
		    jQuery("#wait-g-q").addClass("display-block"); 
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
		    if (textStatus == 'Unauthorized') {
		        alert('custom message. Error: ' + errorThrown);
		    } else {
		        alert('custom message. Error: ' + errorThrown);
		    }
		    
		    jQuery("#wait").removeClass("display-block");
		    jQuery("#wait").addClass("display-none");
			
		    jQuery("#wait-g-q").removeClass("display-none");				
		    jQuery("#wait-g-q").addClass("display-block");
		}
	    });
	}

	function ajaxSubmit() {
		jQuery("#wait").removeClass("display-none");
		jQuery("#wait").addClass("display-block");
	
		jQuery("#wait-g-q").removeClass("display-block");				
		jQuery("#wait-g-q").addClass("display-none");
	    	jQuery("#responseVehicles").html("");

	    	ajaxSubmit_loop("Saloon");
	    	ajaxSubmit_loop("Estate");
	    	ajaxSubmit_loop("MPV");
	}


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
	
	// On Load
	jQuery(function(){
		//initMap();
		if(validate_journey(false))
		{
			//ajaxSubmit();
		}
	});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initMap" async defer></script>