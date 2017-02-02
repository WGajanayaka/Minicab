<?php if(!isset($_POST['cabs_DataAddress2'])){ ?>
<form name="cabformrequest_datass" method="POST">
  <input  id="ac1" class="autocomplete" type="text" name="cabs_DataAddress1" value="10 Amos Road, Sheffield, South Yorkshire, S9 1BX"><br> 
  <input  id="ac2" class="autocomplete" type="text" name="cabs_DataAddress2" value="10 Amos Road, Sheffield, South Yorkshire, S9 1BX"><br> 
	<input type="submit" value="Submit">
</form>
<?php } else { ?>


<form name="cabformrequest_data" id="cabformrequest_data" method="POST">

 <input type="hidden" name="cabs_Source" value="Other">
 DATE OF JOURNEY
   <input type="text" name="cabs_BookingTime" value="2016-12-16T15:00:00"> 
   <input type="hidden" name="cabs_Currency" value="GBP"> 
  
   <input type="hidden" name="cabs_PaymentType" value="Account"> <br>
 
  
  From Address<br>
  <input  id="ac1" class="autocomplete" type="text" name="cabs_FromDataAddress" value="<?php echo $_POST['cabs_DataAddress1']; ?>"><br> 
  <input type="hidden" id="ac1_lat" value=""> 
  <input type="hidden" id="ac1_lng" value=""> 
  
 
  To Address<br>
  <input  id="ac2" class="autocomplete"  type="text" name="cabs_ToDataAddress" value="<?php echo $_POST['cabs_DataAddress2']; ?>"><br>
  <input type="hidden" id="ac2_lat" value=""> 
  <input type="hidden" id="ac2_lng" value="">  
 
   <input type="hidden" name="cabs_passangerCount" value="1">
 
   <input type="hidden" name="cabs_LuggageCount" value="1"> 
  
 
   <input type="hidden" name="cabs_Facilities" value="None"> 
  
   
   <input type="hidden" name="cabs_DriverType" value="Any"> 
  
   
   <input type="hidden" name="cabs_VehicleType" value="Saloon"> 
   
    <div id="responseVehicles"></br></div>

   <input type="hidden" value="Book">
 
 

  

 </form>
 
 
 
<form name="cabformrequest_passanger_data" id="cabformrequest_passanger_data" method="POST">

 
</br>
    Passanger details
</br>
  
 
  <input type="hidden" name="cabs_IsLead" value="true"><br>
  
    Name<br>
  <input type="text" name="cabs_Name" value="John Doe"><br>
     
 Telephone Number<br>
  <input type="text" name="cabs_TelephoneNumber" value="+441234567890"><br>
  
       
 Email Address<br>
  <input type="text" name="cabs_EmailAddress" value="john.doe@gmail.com"><br>
     
 
  <input type="hidden" name="cabs_DriverNote" value="Please help passenger into vehicle."><br>
     
   <input type="hidden" name="cabs_VendorEvents" value="BookingDispatched NoFare BookingCompleted BookingCancelled"> 
     
   <input type="hidden" name="cabs_AlertMethod" value="Textback"> 
     
   <input type="hidden" name="cabs_AgentEvents" value="LocationUpdate VehicleArrived PassengerOnBoard"> 

     
   <input type="hidden" name="cabs_AgentBookingReference" value="AgentBookingRefd"> 
  
  
  <input type="hidden" name="cabs_set_AvailabilityReference" id="cabs_set_AvailabilityReference" value=""> 
  
  
  <div id="response"></div>
  
  
  <input type="submit" value="Book">
  
  
  
 
 
 </form>
 
  <br><br><br>
  <a href="booking-cancel/" target="_blank"> Cancel booking  </a>
  </br>
    <a href="booking-status/" target="_blank"> Booking Status </a>

 
 
 </br>
  </br> 
 </br>
  </br> 
 </br>
  </br>
    Payment details
</br>
  
 <form action="https://www.paypal.com/cgi-bin/webscr" method="post"  target="_blank">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="cabstesting123@gmail.com">
    <input type="hidden" name="item_name" value="Donation">
    <input type="hidden" name="item_number" value="1">
    <input type="text" name="amount" value="9.00">
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="1">
    <input type="text" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="GB">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
	<input type="hidden" name="return" value="http://localhost/cabs/test-api/">  </br>

    <input type="submit" border="0" name="submit" value="Submit Payment">  </br>

    <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>


 <?php }  ?>


 
 
 
 
 
 
 
  
 
 
 
 

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
             url    : "/cabs/wp-admin/admin-ajax.php",
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
		// alert(avref);
		
		ajaxSubmit_set_Reference(veh);
		//cabs_set_AvailabilityReference();
		

	}
	
 
				
				
	
	function ajaxSubmit_set_Reference(passed_vehi_type){
		
		
 		var cabformrequest_vehicle_type_data_var=passed_vehi_type;
 
        var cabformrequest_data_var = jQuery( '#cabformrequest_data').serializeArray();
 
		
        jQuery.ajax({
             type   : "POST",
		 	  //           dataType: 'json',
             url    : "/cabs/wp-admin/admin-ajax.php",
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
 	  // console.log( cabformrequest_data_var  );
	  
	//  	alert(3);

		
        jQuery.ajax({
             type   : "POST",
		 	  //           dataType: 'json',
             url    : "/cabs/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call",
					form_data : cabformrequest_data_var,
					veh_type : cabformrequest_vehicle_type_data_var
					},	
			    success: function(data){
					
							
				//  var obj = jQuery.parseJSON('{"Agent":{"@attributes":{"Id":"300999"},"Reference":"12399999999999999","Time":"2016-12-12T15:04:57.123Z"},"Result":{"Success":"true"},"Vendor":{"@attributes":{"Id":"700999"}},"AvailabilityReference":"501e2e7e-08f9-4fd4-813e-a4eba88c6da3","Pricing":{"PricingMethod":"EstimatedMetered","Price":"0","Commission":"0","Gratuity":"0","Currency":"GBP"},"EstimatedJourney":{"Distance":"784","Duration":"10"},"VehicleType":"Saloon","VehicleCategory":"Standard","AvailableEvents":"BookingDispatched LocationUpdate VehicleArrived PassengerOnBoard NoFare BookingCompleted BookingCancelled","ExpiryTime":"2016-12-20T06:10:19.1301727Z","VendorDetails":{"Name":"Default Liverpool 8 Test","Address":"Test Vendor 00999 Address","Description":"Test Vendor 00999 Description","TelephoneNumber":{},"EmailAddress":{},"Fleet":{"Count":"100","Uniform":"Unknown","Vehicles":{"VehicleInformation":[{"Make":"Ford","Model":"Galaxy","Count":"5"},{"Make":"VW","Model":"Campavan","Count":"3"},{"Make":"Renault","Model":"Espace","Count":"3"},{"Make":"Renault","Model":"Clio","Count":"2"},{"Make":"Citreon","Model":"DS3","Count":"2"},{"Make":"Vauxhall","Model":"Insignia","Count":"2"},{"Make":"KZCPGJRT","Model":"KJNLYVNI","Count":"1"},{"Make":"SVDUOOFT","Model":"NERRKUPX","Count":"1"},{"Make":"ZPYGGBPB","Model":"WAOCEDIC","Count":"1"},{"Make":"AGLQGJBW","Model":"YDZIBLKS","Count":"1"}]}},"Rating":"ThreeStar"}}');
			    
				var obj = jQuery.parseJSON(data);
 
			
			// console.log(obj);
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

