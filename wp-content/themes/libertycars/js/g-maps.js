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

 

        var autocomplete2 = new google.maps.places.Autocomplete(acInputs[1],            {types: ['geocode']});
        var autocomplete1 = new google.maps.places.Autocomplete(acInputs[0],            {types: ['geocode']});
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
            autocomplete1.setBounds(circle.getBounds());
          });
        }
		
		
		

        google.maps.event.addListener(autocomplete2, 'place_changed', function () {
			
			  var place2 = autocomplete2.getPlace();
		 
        for (var component in componentForm) {
	 
        }
 			 
				
				var loc=place2.geometry.location;
				  
				 document.getElementById("ac2_lat").value=place2.geometry.location.lat();
				 document.getElementById("ac2_lng").value=place2.geometry.location.lng();

	   
							/// update vehicles whenever user enters new addresss
							  ajaxSubmit();	
 		 

        });
		
		
		       google.maps.event.addListener(autocomplete1, 'place_changed', function () {
			
			  var place1 = autocomplete1.getPlace();
		 
        for (var component in componentForm) {
	 
        }
 			 
				  var loc=place1.geometry.location;
				 //console.log(loc);

				 document.getElementById("ac1_lat").value=place1.geometry.location.lat();
				 document.getElementById("ac1_lng").value=place1.geometry.location.lng();
				 //console.log(1111111111111111);
				//var lat=place2.geometry.location.lat();
			//	var lng=place2.geometry.location.lng();
			//	var cor=place2.geometry.location;
					//  <input type="hidden" id="ac1_lat" value=""> 
					//  <input type="hidden" id="ac1_lng" value=""> 
	   
							/// update vehicles whenever user enters new addresss
							  ajaxSubmit();	
 		 

        });

		
		
 
}

//initializezzzzzz();

	
 
	 



    </script>
	

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initialize"
        async defer></script>
 