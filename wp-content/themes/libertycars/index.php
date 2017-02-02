<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package libertyCars
 */

get_header(); ?>

	<!-- COVER WRAPPER -->
    <div class="cover-wraper">
      
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
                  <!-- <ul>
                    <li class="active">
                      <a href="<?php //echo esc_url( home_url( '/' ) ); ?>">home <span class="sr-only">(current)</span></a>
                    </li>
                    <li><a href="#">services</a></li>
                    <li><a href="<?php //echo esc_url( home_url( '/' ) ); ?>book-now">book now</a></li>
                    <li><a href="#">airport info</a></li>
                    <li><a href="#">faqs</a></li>
                    <li><a href="#">contact us</a></li>
                  </ul> -->
                </nav>                

                <!-- Navigation End -->                
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- HEADER SECTION END -->

      <!-- GET QUOTE -->
      <div class="get-qt">
        <div class="container">

            <div class="row">
              <div class="col-md-12 text-center">
 
                <form id="get-qt-form" class="form-inline" method="POST" action="book-now/">
                  <div class="form-group">
                    <label class="" for="pick-address">Pick up address</label>
 					
					  <input style="height:50px;width:200px;"  id="ac1" class="autocomplete" type="text" name="cabs_DataAddress1" value="" onfocusout="detect_names()"  >
  					  <input type="hidden" id="ac1_lat" name="ac1_lat" value=""> 
					  <input type="hidden" id="ac1_lng" name="ac1_lng" value=""> 
                     
                   </div>
                  <div class="form-group">
                    <label class="" for="drop-address">Drop off address</label>   
					
					<input style="height:50px;width:200px;"  id="ac2" class="autocomplete" type="text" name="cabs_DataAddress2" value=""><br> 
					  <input type="hidden" id="ac2_lat" name="ac2_lat" value=""> 
					  <input type="hidden" id="ac2_lng" name="ac2_lng" value="">  

                   </div>
				  
                  <div class="form-group">
                    <label class="" for="exampleInputPassword3">&nbsp;</label>
                    <button type="submit" class="btn btn-default">Get Quotes <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
				  
				  				   
				  <div class="bib-common bib-common-last">
                    <label for="pick-up"><i class="fa fa-calendar" aria-hidden="true"></i>date & time             <br>       <input type="text" class="tourday" name="cabs_BookingTime" value="">					<input type="text" id="cabs_BookingFlight" name="cabs_BookingFlight" value="" class="display-none">

</label>
                  </div> 
				  
				  
				  
                </form>            

              </div>
            </div>

        </div>
      </div>
      <!-- GET QUOTE END -->

    </div>
    <!-- COVER WRAPPER END-->

    <!-- MIDDLE CONTENT -->
    <div class="middle-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center"><h1>Book Online or by phone</h1></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="home-intro">
        <div class="row">
          <div class="col-md-12">
            <h3><i class="fa fa-car car-yello-icon" aria-hidden="true"></i> What do you expect from a mini cab service in London?</h3>
            <p>Punctuality, reliability, competitive fares and attentive staff. We agree. We believe that every minicab company should deliver this service as a bare minimum. We here at Liberty Cars believe that a cab service can provide much more. Minicab hire should make your life easier and that is at the core objective of our service, taking the hassle out of travel. Whether you are looking for a local minicab in London, an airport transfer or a seaport transfer, we have a reliable and affordable solution. We do this by delivering end to end transport solutions to make sure you get where you need to go, when you need to get there! When you need a taxi cab in London for a quick pick up and drop or for airport transfer, Liberty Cars has the best transportation for you. Our minicabs in London offers the best services and all the drivers are experienced. Liberty cars company website offers the ease to book directly on this website or call and book your taxi cab today. Check out how to book page for details and book your taxi or mini cab in London for airport transfers and any travelling in and around London.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- MIDDLE CONTENT END -->

    <script>
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
	     //   ajaxSubmit();


	    });


	    google.maps.event.addListener(autocomplete1, 'place_changed', function() {

	        var place1 = autocomplete1.getPlace();

	        for (var component in componentForm) {

	        }

	        var loc = place1.geometry.location;
	        //console.log(loc);

	        document.getElementById("ac1_lat").value = place1.geometry.location.lat();
	        document.getElementById("ac1_lng").value = place1.geometry.location.lng();
 
	       // ajaxSubmit();


	    });
 
	}

//initialize();

	
 
	jQuery("#ac1").on('input',detect_names);
	
	function detect_names(){
		//onfocusout and keypress
			var str =document.getElementById("ac1").value;
			var n = str.toLowerCase().indexOf("heathrow");
 			if(n>-1){
 			console.log(str);
			jQuery("#cabs_BookingFlight").removeClass("display-none");
			jQuery("#cabs_BookingFlight").addClass("display-block");		
			}else {	
			
			jQuery("#cabs_BookingFlight").removeClass("display-block");
			jQuery("#cabs_BookingFlight").addClass("display-none");	
			
			}

	}
 


	//////////////////////////////gm ends/////////////////////// 



    </script>
	

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcyM3ukLxTuhgbvGg-4AnF4vjP208j5o0&libraries=places&callback=initialize"
        async defer></script>
<?php

get_footer();
