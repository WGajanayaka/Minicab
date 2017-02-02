<?php

	require get_template_directory() . '/minicabs_app/cabs-xml-agent-info.php';

//require('cabs-xml-agent-info.php') ;
$agent_info_xml_request=$agent_info_xml_requestP;

 $string2='<?xml version="1.0" encoding="UTF-8"?>
<AgentBookingAvailabilityRequest>
   '.$agent_info_xml_request.'
   <BookingParameters>
      <Source>Other</Source>
      <BookingTime>2016-12-16T15:00:00</BookingTime>
      <Pricing>
         <Currency>GBP</Currency>
         <PaymentType>Account</PaymentType>
      </Pricing>
      <Journey>
         <From>
            <Type>Address</Type>
            <Data>10 Amos Road, Sheffield, South Yorkshire, S9 1BX</Data>
            <Coordinate>
               <Latitude>53.412535277777778</Latitude>
               <Longitude>-1.4195258333333334</Longitude>
            </Coordinate>
         </From>
         <To>
            <Type>Address</Type>
            <Data>14 Aylesbury Crescent, Sheffield, South Yorkshire, S9 1JR</Data>
            <Coordinate>
               <Latitude>53.418405555555559</Latitude>
               <Longitude>-1.4192258333333334</Longitude>
            </Coordinate>
         </To>
      </Journey>
      <Ride Type="Passenger">
         <Count>1</Count>
         <Luggage>0</Luggage>
         <Facilities>Wheelchair</Facilities>
         <DriverType>Any</DriverType>
         <VehicleType>Saloon</VehicleType>
      </Ride>
   </BookingParameters>
</AgentBookingAvailabilityRequest>';


 if($action=='cabform_request_data_ajax_call'){
 $string='';
$string='<?xml version="1.0" encoding="UTF-8"?>
<AgentBookingAvailabilityRequest>
      '.$agent_info_xml_request.'

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
 } else if($action=='cabform_request_data_ajax_call_passanger'){
 
 
   	  
 $string='';
$string='<?xml version="1.0" encoding="UTF-8"?>
 <AgentBookingAuthorizationRequest>
    '.$agent_info_xml_request.'
 <AvailabilityReference>'.$fdAvailabilityReference.'</AvailabilityReference>
 <AgentBookingReference>'.$cabs_AgentBookingRef.'</AgentBookingReference>
 <Passengers>
 <PassengerDetails IsLead="'.$cabs_IsLead.'">
 <Name>'.$cabs_Name.'</Name>
 <TelephoneNumber>'.$cabs_TelephoneNumber.'</TelephoneNumber>
 <EmailAddress>'.$cabs_EmailAddress.'</EmailAddress>
 </PassengerDetails>
 
 </Passengers>
 <DriverNote>'.$cabs_DriverNote.'</DriverNote>
 <Notifications>
  <VendorEvents>BookingDispatched NoFare BookingCompleted
BookingCancelled</VendorEvents>
 <AlertMethod>'.$cabs_AlertMethod.'</AlertMethod>
 <AgentEvents>'.$cabs_AgentEvents.'</AgentEvents>
 </Notifications>
 
 
</AgentBookingAuthorizationRequest>';


 }else if($action=='cabform_request_data_ajax_call_status'){
 
 //overide ref vars, included ref
 $Reference="";
 $Reference=$cabs_ReferenceID;
 // $cabs_ReferenceID=$_POST['form_data']['0']['value'];
//	 $cabs_AuthorizationReferenceID=$_POST['form_data']['1']['value'];		

 $string='';
$string='<?xml version="1.0" encoding="UTF-8"?>
  <AgentBookingStatusRequest>
      '.$agent_info_xml_request.'
 <AuthorizationReference>'.$cabs_AuthorizationReferenceID.'</AuthorizationReference>
</AgentBookingStatusRequest>
';


 }else if($action=='cabform_request_data_ajax_call_cancel'){
 
 //overide ref vars, included ref
 $Reference="";
 $Reference=$cabs_ReferenceID;
 // $cabs_ReferenceID=$_POST['form_data']['0']['value'];
//	 $cabs_AuthorizationReferenceID=$_POST['form_data']['1']['value'];		

 $string='';
$string='<?xml version="1.0" encoding="UTF-8"?>
  <AgentBookingCancellationRequest>
      '.$agent_info_xml_request.'
 <AuthorizationReference>'.$cabs_AuthorizationReferenceID.'</AuthorizationReference>
</AgentBookingCancellationRequest>
';


 } 
 
 
 ?>