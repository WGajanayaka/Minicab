<?php
$theWebPaymentReference = $_POST['Reference'];
$ReceiptId = $_POST['ReceiptId'];
$CardToken = $_POST['CardToken'];

/* Test Servre 
$api_request='https://cxs-staging.autocab.net/api/agent';
$AgentId=300999;
$Password='jEHjE5Kv';
$VendorId=700999;
*/

// Production Server 
 $api_request='https://cxs.autocab.net/api/agent'
 $AgentId=36344;
 $Password='erwhxY8W';
 $VendorId=76344;
 



$Time = '2016-12-24T17:00:00+00:00';
 
if($theWebPaymentReference!=null)
{
	require "judopay/judocallback.php"; //Get the status
	$post_id = $receipt['yourPaymentReference'];
	
	if($webpaymentStatus != '')
	{
		$receipt = $transactionDetails["receipt"];
		
		//Make the booking 
		$Source = get_post_meta($post_id, Source, true);
		$BookingTime = get_post_meta($post_id, BookingTime, true);
		$Currency = get_post_meta($post_id, Currency, true);
		$PaymentType = get_post_meta($post_id, PaymentType, true);
		$FromDataAddress = get_post_meta($post_id, FromDataAddress, true);
		$FromCoordinateDataLatitude = get_post_meta($post_id,FromCoordinateDataLatitude, true);
		$FromCoordinateDataLongitude = get_post_meta($post_id, FromCoordinateDataLongitude, true);
		$ToDataAddress = get_post_meta( $post_id,ToDataAddress, true);
		$ToCoordinateDataLatitude = get_post_meta($post_id,ToCoordinateDataLatitude, true);
		$ToCoordinateDataLongitude =  get_post_meta($post_id, ToCoordinateDataLongitude, true);
		$cabs_passangerCount = get_post_meta($post_id, cabs_passangerCount, true);
		$cabs_LuggageCount = get_post_meta($post_id, cabs_LuggageCount, true);
		$cabs_Facilities = get_post_meta($post_id, cabs_Facilities, true);
		$cabs_DriverType = get_post_meta($post_id, cabs_DriverType, true);
		$cabs_VehicleType = get_post_meta($post_id, cabs_VehicleType, true);
		
		$cabs_IsLead = get_post_meta($post_id, cabs_IsLead, true);
		$cabs_Name = get_post_meta($post_id, cabs_Name, true);
		$cabs_TelephoneNumber = get_post_meta($post_id, cabs_TelephoneNumber, true);
		$cabs_EmailAddress = get_post_meta($post_id, cabs_EmailAddress, true);
		$cabs_DriverNote = get_post_meta($post_id, cabs_DriverNote, true);
		$cabs_AlertMethod = get_post_meta($post_id, AlertMethod, true);
		$cabs_VendorEvents = get_post_meta($post_id, VendorEvents, true);
		$cabs_AgentEvents = get_post_meta($post_id, AgentEvents, true);
		
		

 		$AgentInfoRequest='<Agent Id="'.$AgentId.'">
      					<Password>'.$Password.'</Password>
      					<Reference>'.$post_id.'</Reference>
      					<Time>'.$Time.'</Time>
   				   </Agent>
  				   <Vendor Id="'.$VendorId.'" />';
		
		// Step 1- Make booking Avalability Request Again 
		$AgentBookingAvailabilityRequest = '<?xml version="1.0" encoding="UTF-8"?>
							<AgentBookingAvailabilityRequest>
							   '.$AgentInfoRequest.'
							   <BookingParameters>
							      <Source>'.$Source.'</Source>
							      <BookingTime>'.$BookingTime.'</BookingTime>
							      <Pricing>
							           <Currency>'.$Currency.'</Currency>
							         <PaymentType>'.$PaymentType.'</PaymentType>
							      </Pricing>
							      <Journey>
							         <From>
							            <Type>Address</Type>
							            <Data>'.$FromDataAddress.'</Data>
							            <Coordinate>
							               <Latitude>'.$FromCoordinateDataLatitude.'</Latitude>
							               <Longitude>'.$FromCoordinateDataLongitude.'</Longitude>
							            </Coordinate>
							         </From>
							         <To>	 
							            <Type>Address</Type>
							            <Data>'.$ToDataAddress.'</Data>
							            <Coordinate>
							               <Latitude>'.$ToCoordinateDataLatitude.'</Latitude>
							               <Longitude>'.$ToCoordinateDataLongitude.'</Longitude>
							            </Coordinate>
							         </To>
							      </Journey>
							      <Ride Type="Passenger">
							         <Count>'.$cabs_passangerCount.'</Count>
							         <Luggage>'.$cabs_LuggageCount.'</Luggage>
							         <Facilities>'.$cabs_Facilities.'</Facilities>
							         <DriverType>'.$cabs_DriverType.'</DriverType>
							         <VehicleType>'.$cabs_VehicleType.'</VehicleType>
							      </Ride>
							   </BookingParameters>
							</AgentBookingAvailabilityRequest>';
							
		//echo $AgentBookingAvailabilityRequest ;
							
 		
 		$AvailabilityResponse = wp_remote_post($api_request, array('method' => 'POST','timeout' => 45,'redirection' => 5,	'httpversion' => '1.0',	
 						'blocking' => true,
		 				'headers' => array('Content-type' => 'text/xml'),
						'headers' => array(),
	 					'body' =>  $AgentBookingAvailabilityRequest,
						'cookies' => array())
					   );
		
		$AvailabilityXML = new SimpleXMLElement($AvailabilityResponse['body']);
		 
		//print_r($AvailabilityXML);
		 
		$AvailabilityReference = $AvailabilityXML->AvailabilityReference->__toString();
		 
		//Echo $AvailabilityReference ;
		
		//Make the booking Request 		
		$AgentBookingAuthorizationRequest='<?xml version="1.0" encoding="UTF-8"?>
							<AgentBookingAuthorizationRequest>
							'.$AgentInfoRequest.'
							<AvailabilityReference>'.$AvailabilityReference .'</AvailabilityReference>
							<AgentBookingReference>'.$post_id.'</AgentBookingReference>
							<Passengers>
								<PassengerDetails IsLead="'.$cabs_IsLead.'">
							 		<Name>'.$cabs_Name.'</Name>
							 		<TelephoneNumber>'.$cabs_TelephoneNumber.'</TelephoneNumber>
							 		<EmailAddress>'.$cabs_EmailAddress.'</EmailAddress>
							 	</PassengerDetails>
							 </Passengers>
							 <DriverNote>'.$cabs_DriverNote.'</DriverNote>
							 <Notifications>
							 	<VendorEvents>'.$cabs_VendorEvents.' </VendorEvents>
							 	<AlertMethod>'.$cabs_AlertMethod.'</AlertMethod>
							 	<AgentEvents>'.$cabs_AgentEvents.'</AgentEvents>
							 </Notifications>
						</AgentBookingAuthorizationRequest>';
						
		//echo $AgentBookingAuthorizationRequest;
						
		 $BookingResponse = wp_remote_post($api_request, array('method' => 'POST','timeout' => 45,'redirection' => 5,	'httpversion' => '1.0',	'blocking' => true,
		 				'headers' => array('Content-type' => 'text/xml'),
						'headers' => array(),
	 					'body' =>  $AgentBookingAuthorizationRequest   ,
						'cookies' => array())
					   );
					   
		 $BookingResponseXML = new SimpleXMLElement($BookingResponse['body']);
		 
		 //print_r($BookingResponseXML);

		//Update Booking 
		
		
		
		//Save Payment Information  
		
		//Send Email.
?>
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
            <h1 class="animated fadeIn"><i class="fa fa-car car-yello-icon" aria-hidden="true"></i> booking success</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER CONTENT END -->

<!-- PAGE CONTENT -->
<div class="page-content" id="price-blk-scanner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="booking-input-block basic-form">


						<form>

		                  	<h3 class="box-title"><i class="fa fa-address-card-o car-yello-icon no-anim" aria-hidden="true"></i>  Payment Receipt Details </h3>

			               	<div class="blk-car-pattern">

			               		<!-- This is basic layout -->
			                    <div class="bib-common">
			                      <label>hello</label>
			                      <input type="text" name="" value="hello" disabled>
			                    </div>

			                    <div class="bib-common">
			                      <label>Receipt Id :</label>
			                      <input type="text" name="" value="<?php echo $receipt['receiptId']; ?>" disabled>
			                    </div>	

			                    <div class="bib-common">
			                      <label>Payment Reference :</label>
			                      <input type="text" name="" value="<?php echo $receipt['yourPaymentReference']; ?>" disabled>
			                    </div> 	

			                    <div class="bib-common">
			                      <label>Result :</label>
			                      <input type="text" name="" value="<?php echo $receipt['result']; ?>" disabled>
			                    </div>

			                    <div class="bib-common">
			                      <label>Paid on:</label>
			                      <input type="text" name="" value="<?php echo $receipt['createdAt']; ?>" disabled>
			                    </div>

			                    <div class="bib-common">
			                      <label>Authorization Reference :</label>
			                      <input type="text" name="" value="<? echo $BookingResponseXML->AuthorizationReference->__toString(); ?>" disabled>
			                    </div>

			                    <div class="bib-common">
			                      <label>BookingReference :</label>
			                      <input type="text" name="" value="<? echo $BookingResponseXML->BookingReference->__toString(); ?>" disabled>
			                    </div>

			               	</div>
							<input type="submit" value="Cancel">

		 				</form>

					
				</div>
			</div>
		</div>
	</div>
</div>

<?php

	}
	else
	{
		echo 'Payment Details not valied'; 
	}
}
