<?php

function cabs_judo_provision_request() {
 
    // The $_REQUEST contains all the data sent via ajax
    
    if ( isset($_REQUEST) ) {  
    
    	$ConsumerReference = $_REQUEST['cr'];;
	$amount = $_REQUEST['a'];
	$Currency= 'GBP';	  
	$Source = 'Other';
	$cabs_IsLead = true;
	$PaymentType = 'Account';
	$cabs_AgentEvents = 'LocationUpdate VehicleArrived PassengerOnBoard';
	$cabs_VendorEvents='BookingDispatched NoFare BookingCompleted BookingCancelled';
	$cabs_AlertMethod= 'Textback';
	           
	$cabs_VehicleType  = $_REQUEST['vt'];
	$cabs_Name = $_REQUEST['pax']['1']['value'];
	$cabs_EmailAddress = $_REQUEST['pax']['2']['value'];
	$cabs_TelephoneNumber = $_REQUEST['pax']['3']['value'];
	$cabs_DriverNote = $_REQUEST['pax']['4']['value'];

	$FromDataAddress = $_REQUEST['booking']['3']['value'];
	$FromCoordinateDataLatitude = $_REQUEST['booking']['4']['value'];
	$FromCoordinateDataLongitude = $_REQUEST['booking']['5']['value'];
	$ToDataAddress = $_REQUEST['booking']['6']['value'];
	$ToCoordinateDataLatitude = $_REQUEST['booking']['7']['value'];
	$ToCoordinateDataLongitude = $_REQUEST['booking']['8']['value'];
	$BookingTime = $_REQUEST['booking']['9']['value'];
	$cabs_passangerCount = $_REQUEST['booking']['10']['value'];
	$cabs_LuggageCount = $_REQUEST['booking']['11']['value'];
	$cabs_Facilities  = $_REQUEST['booking']['12']['value'];
	$cabs_DriverType = $_REQUEST['booking']['13']['value'];
	
	$dateConvertISO=strtotime( $BookingTime );
	$BookingTime=date( 'c', $dateConvertISO );
	 
	
	//$cabs_AgentBookingRef = $_REQUEST['form_data']['8']['value'];
		
	$post=" Name : ".$cabs_Name; 
	$post.="<br> Email Address : ".$cabs_EmailAddress;
	$post.="<br> From Address : ".$FromDataAddress;
	$post.="<br> To Address : ".$ToDataAddress;
	$post.="<br> Telephone Number : ".$cabs_TelephoneNumber;
	$post.="<br> Vehicle Type : ".$vehicleType;
	$post.="<br> Driver Note : ".$cabs_DriverNote;
	$post.="<br> Booking Time : ".$BookingTime;
	$post.="<br> Payment Type : ".$PaymentType;
			
	$my_post = array(
	 	'post_title'    => $cabs_Name.'('.$ConsumerReference.')',
		'post_content'  => $post,
		'post_status'   => 'Pending Payment');
		
	
			
	$get_id = wp_insert_post( $my_post );				
	add_post_meta($get_id,'Source', $Source);
	add_post_meta($get_id,'Currency', $Currency);
	add_post_meta($get_id,'PaymentType', $PaymentType);

	add_post_meta($get_id,'FromDataAddress', $FromDataAddress);
	add_post_meta($get_id,'FromCoordinateDataLatitude', $FromCoordinateDataLatitude);
	add_post_meta($get_id,'FromCoordinateDataLongitude', $FromCoordinateDataLongitude);
	add_post_meta($get_id,'ToDataAddress', $ToDataAddress);
	add_post_meta($get_id,'ToCoordinateDataLatitude', $ToCoordinateDataLatitude);
	add_post_meta($get_id,'ToCoordinateDataLongitude', $ToCoordinateDataLongitude);
	add_post_meta($get_id,'BookingTime', $BookingTime);
	add_post_meta($get_id,'cabs_passangerCount', $cabs_passangerCount);
	add_post_meta($get_id,'cabs_LuggageCount', $cabs_LuggageCount);
	add_post_meta($get_id,'cabs_Facilities', $cabs_Facilities);
	add_post_meta($get_id,'cabs_DriverType', $cabs_DriverType);
	add_post_meta($get_id,'cabs_VehicleType', $cabs_VehicleType);
	
	add_post_meta($get_id,'cabs_IsLead', $cabs_IsLead );
	add_post_meta($get_id,'cabs_Name', $cabs_Name);
	add_post_meta($get_id,'cabs_TelephoneNumber', $cabs_TelephoneNumber);
	add_post_meta($get_id,'cabs_EmailAddress', $cabs_EmailAddress);
	add_post_meta($get_id,'cabs_DriverNote', $cabs_DriverNote);
	add_post_meta($get_id,'PaymentConsumerReference', $ConsumerReference);
	add_post_meta($get_id,'AgentEvents ', $cabs_AgentEvents );
	add_post_meta($get_id,'VendorEvents', $cabs_VendorEvents);
	add_post_meta($get_id,'AlertMethod', $cabs_AlertMethod);
	
	$PaymentReference = $get_id;
	
	require get_template_directory() . '/template-parts/judopay/judopay.php';
	
     	echo '<!-- Post ID:'.$get_id .' --><form action="'.$formPostUrl.'" method="post">';
	echo '<input  id="Reference" name="Reference" type="hidden" value="'. $theWebPaymentReference.'">';
	echo '<input type="submit" class="book-now-btn" value="Pay Now" style="color:white;">';
	echo '</form>';
   	
        
       // print_r($_REQUEST);
     
    }
     
    // Always die in functions echoing ajax content
    die();
}
 
add_action( 'wp_ajax_judo_provision_request', 'cabs_judo_provision_request' );
add_action( 'wp_ajax_nopriv_judo_provision_request', 'cabs_judo_provision_request' );

function make_ajax_call_cab_req(){
 	
 	require get_template_directory() . '/minicabs_app/cabs-ajax-post-vars.php';
	
 	require get_template_directory() . '/minicabs_app/cabs-ajax-append-xml.php';

 	require get_template_directory() . '/minicabs_app/cabs-ajax-retrive-response.php';
 }

add_action('wp_ajax_cabform_request_data_ajax_call', 'make_ajax_call_cab_req');
add_action('wp_ajax_nopriv_cabform_request_data_ajax_call', 'make_ajax_call_cab_req'); // not really needed
 
 
function make_ajax_call_cab_req_passanger(){
 
 
	require get_template_directory() . '/minicabs_app/cabs-ajax-post-vars.php';
	
	require get_template_directory() . '/minicabs_app/cabs-ajax-append-xml.php';

	require get_template_directory() . '/minicabs_app/cabs-ajax-retrive-response.php';
	
  
 }
 
add_action('wp_ajax_cabform_request_data_ajax_call_passanger', 'make_ajax_call_cab_req_passanger');
add_action('wp_ajax_nopriv_cabform_request_data_ajax_call_passanger', 'make_ajax_call_cab_req_passanger'); // not really needed

 
function make_ajax_call_get_lo_la_maps_data_ajax_call($place_address){
	
	
 //	$place_address= $_POST['form_data_maps'];
 
 //  https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD3PRRjN1TXyhtE3M8nTf66NNWjGNrtIGA&place_id=ChIJd4kngR5Z4joRtOxtwmC6mZ8
$api_request='https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD3PRRjN1TXyhtE3M8nTf66NNWjGNrtIGA&address='.$place_address.'';

//echo $api_request;

	 $response = wp_remote_post( $api_request, array(
	'method' => 'POST',
	'timeout' => 45,
	'redirection' => 5,
	'httpversion' => '1.0',
	'blocking' => true,

    'headers' => array('Content-type' => 'text/xml'),

	'headers' => array(),
 	'body' => '' ,
  //       'body' => array('postdata' => $string, 'postfield' => 'value'),

	'cookies' => array()
    )
);


  $responsezz = new SimpleXMLElement($response['body']);

  //  print_r( $responsezz->AgentBookingAvailabilityResponse->VendorDetails->Vehicles->VehicleInformation['0']->Make );
   //  print_r( $responsezz->VendorDetails->Fleet->Vehicles->VehicleInformation  );
  //    print_r( $responsezz->VendorDetails->Fleet->Vehicles  );
  
 // $json_encode=json_encode($responsezz);
//	 echo ( $json_encode );
	return $responsezz;	
 
 	//wp_die();

   
 }
 
 
	
  			//	 var resLat=obj.result.geometry.location.lat;
  			//	 var resLng=obj.result.geometry.location.lng; 
//add_action('wp_ajax_get_lo_la_maps_data_ajax_call', 'make_ajax_call_get_lo_la_maps_data_ajax_call');
//add_action('wp_ajax_nopriv_get_lo_la_maps_data_ajax_call', 'make_ajax_call_get_lo_la_maps_data_ajax_call'); // not really needed


function widget_booking_minicabs_function() {

	require get_template_directory() . '/minicabs_app/cabs-form.php';
 
}


function register_shortcodes_cabs(){

add_shortcode( 'widget_booking_minicabs_call' , 'widget_booking_minicabs_function' );

}

add_action( 'init', 'register_shortcodes_cabs');




function register_shortcodes_Cancel_Booking_content() {

	 require get_template_directory() . '/minicabs_app/cabs-form-cancel.php';
 // echo 'Cancel Booking';
}
 
function register_shortcodes_Cancel_Booking(){

add_shortcode( 'widget_booking_Cancel_Booking_call' , 'register_shortcodes_Cancel_Booking_content' );

}
add_action( 'init', 'register_shortcodes_Cancel_Booking');



function make_ajax_call_cab_show_cancel(){
 
 	 require get_template_directory() . '/minicabs_app/cabs-ajax-post-vars.php';

 	 require get_template_directory() . '/minicabs_app/cabs-ajax-append-xml.php';
 
	 require get_template_directory() . '/minicabs_app/cabs-ajax-retrive-response.php';
	
  
 }
 
add_action('wp_ajax_cabform_request_data_ajax_call_cancel', 'make_ajax_call_cab_show_cancel');
add_action('wp_ajax_nopriv_cabform_request_data_ajax_call_cancel', 'make_ajax_call_cab_show_cancel'); // not really needed


function register_shortcodes_Status_Booking_content() {

 require get_template_directory() . '/minicabs_app/cabs-form-status.php';
  //echo 'Check Status of Booking ';
}
 
function register_shortcodes_Status_Booking(){

add_shortcode( 'widget_booking_Status_Booking_call' , 'register_shortcodes_Status_Booking_content' );

}
add_action( 'init', 'register_shortcodes_Status_Booking');


function make_ajax_call_cab_show_status(){
 
 	 require get_template_directory() . '/minicabs_app/cabs-ajax-post-vars.php';

 	 require get_template_directory() . '/minicabs_app/cabs-ajax-append-xml.php';
 
	  require get_template_directory() . '/minicabs_app/cabs-ajax-retrive-response.php';
  
 }
 
add_action('wp_ajax_cabform_request_data_ajax_call_status', 'make_ajax_call_cab_show_status');
add_action('wp_ajax_nopriv_cabform_request_data_ajax_call_status', 'make_ajax_call_cab_show_status'); // not really needed



function register_shortcodes_make_payment_content() {

 require get_template_directory() . '/minicabs_app/cabs-form-make-payment.php';
  //echo 'Check Status of Booking ';
}
 
function register_shortcodes_make_payment(){

add_shortcode( 'widget_booking_make_payment' , 'register_shortcodes_make_payment_content' );

}
add_action( 'init', 'register_shortcodes_make_payment');


 ?>