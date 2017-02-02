<?php


 //$api_request='https://cxs-staging.autocab.net/api/agent'; //Test Server
 $api_request='https://cxs.autocab.net/api/agent'  ; //Production Server 

 $action=$_POST['action'];
 //$compare_str=strcmp($action,"cabform_request_data_ajax_call");
 
$cabs_AgentEvents = 'LocationUpdate VehicleArrived PassengerOnBoard';
$cabs_VendorEvents= 'BookingDispatched NoFare BookingCompleted BookingCancelled';
$cabs_AlertMethod=  'Textback';
 
 if($action=='cabform_request_data_ajax_call'){
	 
	 
	 /*
	 $FromDataAddress=$_POST['form_data']['4']['value'];
	 $FromDataAddressLaLt=make_ajax_call_get_lo_la_maps_data_ajax_call($FromDataAddress);
	 $FromDataAddresslng=$FromDataAddressLaLt->result->geometry->location->lng;
 	 $FromDataAddresslat=$FromDataAddressLaLt->result->geometry->location->lat;
	 
	 $ToDataAddress=$_POST['form_data']['5']['value'];
	 $ToDataAddressLaLt=make_ajax_call_get_lo_la_maps_data_ajax_call($ToDataAddress);
 	 $ToDataAddresslng=$ToDataAddressLaLt->result->geometry->location->lng;
 	 $ToDataAddresslat=$ToDataAddressLaLt->result->geometry->location->lat;
	 
	 */

	 $Source=$_POST['form_data']['0']['value'];
	 $Currency=$_POST['form_data']['1']['value'];
	 $PaymentType=$_POST['form_data']['2']['value'];
	 
	 $FromDataAddress=$_POST['form_data']['3']['value'];
	 $FromCoordinateDataLatitude=$_POST['form_data']['4']['value'];
	 $FromCoordinateDataLongitude=$_POST['form_data']['5']['value'];
	 
	 $ToDataAddress=$_POST['form_data']['6']['value'];
	 $ToCoordinateDataLatitude=$_POST['form_data']['7']['value'];
	 $ToCoordinateDataLongitude=$_POST['form_data']['8']['value'];
	 
	 $BookingTime=$_POST['form_data']['9']['value'];
	 $dateConvertISO=strtotime( $BookingTime );
	 $BookingTime=date( 'c', $dateConvertISO );
 

	 $cabs_passangerCount=$_POST['form_data']['10']['value'];
	 $cabs_LuggageCount=$_POST['form_data']['11']['value'];
	 $cabs_Facilities=$_POST['form_data']['12']['value'];
	 $cabs_DriverType=$_POST['form_data']['13']['value'];
	 $cabs_VehicleType=$_POST['veh_type'];
	 $cabs_veh_ref=$_POST['form_data']['15']['value'];
	 
 } else if($action=='cabform_request_data_ajax_call_passanger'){
	 
	 

  				// var resLng=obj.result.geometry.location.lng;


	 
	 $fdAvailabilityReference=$_POST['form_data_AvailabilityReference'];
  	 $cabs_IsLead=$_POST['form_data']['0']['value'];
	 $cabs_Name=$_POST['form_data']['1']['value'];
	 $cabs_EmailAddress=$_POST['form_data']['2']['value'];
	 $cabs_TelephoneNumber=$_POST['form_data']['3']['value'];
	 $cabs_DriverNote=$_POST['form_data']['4']['value'];
	 $cabs_AgentBookingRef=$_POST['form_data']['8']['value'];
	 $cabs_veh_ref=$_POST['form_data']['9']['value'];

	 //// for saving purpose
	 


	 $Source=$_POST['form_data_req']['0']['value'];
	 $Currency=$_POST['form_data_req']['1']['value'];
	 $PaymentType=$_POST['form_data_req']['2']['value'];
	 
	 $FromDataAddress=$_POST['form_data_req']['3']['value'];
	 $FromCoordinateDataLatitude=$_POST['form_data_req']['4']['value'];
	 $FromCoordinateDataLongitude=$_POST['form_data_req']['5']['value'];
	 
	 $ToDataAddress=$_POST['form_data_req']['6']['value'];
	 $ToCoordinateDataLatitude=$_POST['form_data_req']['7']['value'];
	 $ToCoordinateDataLongitude=$_POST['form_data_req']['8']['value'];
	 
	 $BookingTime=$_POST['form_data_req']['9']['value'];
	 $dateConvertISO=strtotime( $BookingTime );
	 $BookingTime=date( 'c', $dateConvertISO );
 

	 $cabs_passangerCount=$_POST['form_data_req']['10']['value'];
	 $cabs_LuggageCount=$_POST['form_data_req']['11']['value'];
	 $cabs_Facilities=$_POST['form_data_req']['12']['value'];
	 $cabs_DriverType=$_POST['form_data_req']['13']['value'];
	 $cabs_VehicleType=$_POST['veh_type'];
	 $cabs_veh_ref=$_POST['form_data_req']['15']['value'];
	 
	} 
	
	else if($action=='cabform_request_data_ajax_call_status'){
		
  	 $cabs_ReferenceID=$_POST['form_data']['0']['value'];
	 $cabs_AuthorizationReferenceID=$_POST['form_data']['1']['value'];		
		
	} 
	else if($action=='cabform_request_data_ajax_call_cancel'){
		
  	 $cabs_ReferenceID=$_POST['form_data']['0']['value'];
	 $cabs_AuthorizationReferenceID=$_POST['form_data']['1']['value'];		
		
	}
 
 
 
 ?>