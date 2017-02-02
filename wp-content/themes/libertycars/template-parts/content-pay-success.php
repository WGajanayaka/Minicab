<?php
$api_request='https://cxs-staging.autocab.net/api/agent';

$theWebPaymentReference = $_POST['Reference'];
$ReceiptId = $_POST['ReceiptId'];
$CardToken = $_POST['CardToken'];

$AgentId=300999;
$Password='jEHjE5Kv';
$VendorId=700999;
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
						
		echo $AgentBookingAuthorizationRequest;
						
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


		
		//Send Email. starts


				$to=$cabs_EmailAddress;
				$subject = 'The test subject';
				$imgUrl_LC_logo=wp_get_attachment_url(100);

				$message = '<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td valign="top" style="padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td valign="top" style="padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td width="400" valign="top" style="width:300.0pt;padding:0cm 0cm 0cm 0cm">
<p class="MsoNormal"><img width="360" height="150" id="m_6757093997842635877m_5944428788199314964_x0000_i1025" src="'.$imgUrl_LC_logo.'" class="CToWUd a6T" tabindex="0"><div class="a6S" dir="ltr" style="opacity: 0.01; left: 395.5px; top: 167px;"><div id=":uc" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Download attachment " data-tooltip-class="a1V" data-tooltip="Download"><div class="aSK J-J5-Ji aYr"></div></div></div><u></u><u></u></p>
</td>
<td width="180" valign="top" style="width:135.0pt;padding:0cm 0cm 0cm 0cm">
<p class="MsoNormal" align="right" style="text-align:right"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><span class="il">Invoice</span> number:<br>
<b>V76344-A36344-13187261</b><br>
<br>
<span class="il">Invoice</span> issued on:<br>
<b>'.$BookingTime.'</b><br>
<br>
Trip billed on:<br>
<b>'.$BookingTime.'</b></span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
<tr>
<td valign="top" style="border:none;border-bottom:solid #eaeaea 1.0pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td width="290" valign="top" style="width:217.5pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="288" style="width:216.0pt">
<tbody>
<tr>
<td style="padding:26.25pt 0cm 11.25pt 0cm">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">PASSENGER NAME:</span></b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><br>
<br>
'.$cabs_Name.'</span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
<td width="290" valign="top" style="width:217.5pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="288" style="width:216.0pt">
<tbody>
<tr>
<td style="padding:26.25pt 0cm 11.25pt 0cm">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">JOURNEY DATE:</span></b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><br>
<br>
'.$BookingTime.'</span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
<tr>
<td valign="top" style="border:none;border-bottom:solid #eaeaea 1.0pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td width="290" valign="top" style="width:217.5pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="288" style="width:216.0pt">
<tbody>
<tr>
<td style="padding:18.75pt 0cm 11.25pt 0cm">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">PICKUP LOCATION:</span></b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><br>
<br>
'.$FromDataAddress.'</span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
<td width="290" valign="top" style="width:217.5pt;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="288" style="width:216.0pt">
<tbody>
<tr>
<td style="padding:18.75pt 0cm 11.25pt 0cm">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">DROP OFF DESTINATION:</span></b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><br>
<br>
'.$ToDataAddress.'</span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="2" valign="top" style="padding:0cm 0cm 0cm 0cm;border-radius:10px">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="350" style="width:262.5pt">
<tbody>
<tr>
<td valign="top" style="border:none;border-bottom:solid #eaeaea 1.0pt;padding:18.75pt 0cm 11.25pt 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellpadding="0" width="250" style="width:187.5pt">
<tbody>
<tr>
<td style="background:#279b00;padding:7.5pt 3.75pt 7.5pt 7.5pt">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:white">FARE: £'.$cabs_veh_p.'</span></b><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
<tr>
<td valign="top" style="border-top:dotted #e9e9e9 1.0pt;border-left:none;border-bottom:dotted #e9e9e9 1.0pt;border-right:none;padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td width="290" valign="top" style="width:217.5pt;padding:11.25pt 0cm 0cm 0cm">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="280" style="width:210.0pt">
<tbody>
<tr style="height:30.0pt">
<td colspan="2" style="padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">TRIP STATISTICS</span></b><u></u><u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="138" style="width:103.5pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">DISTANCE:</span></b><u></u><u></u></p>
</td>
<td width="137" style="width:102.75pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">1.00 miles</span><u></u><u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="138" style="width:103.5pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><u></u>&nbsp;<u></u></p>
</td>
<td width="137" style="width:102.75pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><u></u>&nbsp;<u></u></p>
</td>
</tr>
<tr>
<td colspan="2" valign="top" style="padding:0cm 0cm 0cm 0cm"></td>
</tr>
</tbody>
</table>
</td>
<td width="290" valign="top" style="width:217.5pt;padding:11.25pt 0cm 0cm 0cm">
<div align="right">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="240" style="width:180.0pt">
<tbody>
<tr style="height:30.0pt">
<td colspan="2" style="padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">FARE BREAKDOWN</span></b><u></u><u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="131" style="width:98.25pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">FARE:</span></b><u></u><u></u></p>
</td>
<td width="109" style="width:81.75pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">£'.$cabs_veh_p.'</span><u></u><u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="131" style="width:98.25pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><u></u>&nbsp;<u></u></p>
</td>
<td width="109" style="width:81.75pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><u></u>&nbsp;<u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="131" style="width:98.25pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><u></u>&nbsp;<u></u></p>
</td>
<td width="109" style="width:81.75pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><u></u>&nbsp;<u></u></p>
</td>
</tr>
<tr style="height:30.0pt">
<td width="131" style="width:98.25pt;border:none;border-top:solid #cccccc 1.0pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">TOTAL COST:</span></b><u></u><u></u></p>
</td>
<td width="109" style="width:81.75pt;border:none;border-top:solid #cccccc 1.0pt;padding:0cm 0cm 0cm 0cm;height:30.0pt">
<p class="MsoNormal" align="right" style="text-align:right"><b><span style="font-family:&quot;Arial&quot;,sans-serif;color:#3165f3">£'.$cabs_veh_p.'</span></b><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
<td style="padding:0cm 0cm 0cm 0cm"></td>
</tr>
<tr>
<td valign="top" style="padding:0cm 0cm 0cm 0cm">
<div align="center">
<table class="m_6757093997842635877m_5944428788199314964MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="580" style="width:435.0pt">
<tbody>
<tr>
<td valign="top" style="padding:11.25pt 0cm 11.25pt 0cm">
<p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Thank</span><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#1f497d">
</span><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">you for choosing Liberty Cars - 020 8900 5555. We appreciate your business.</span><u></u><u></u></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
<td style="padding:0cm 0cm 0cm 0cm"></td>
</tr>
</tbody>
</table>';


$headers = array('Content-Type: text/html; charset=UTF-8','From: Liberty Cars <bookings@minicabsinlondon.com>', 'Cc: Liberty Cars 2 <bookings@minicabsinlondon.com>');

				 
				wp_mail( $to, $subject, $message, $headers );



		/// send mail ends


?>
<h3> Payment Receipt Details</h3>
<p>Receipt Id : <?php echo $receipt['receiptId']; ?></p>
<p>Payment Reference : <?php echo $receipt['yourPaymentReference']; ?></p>
<p>Result : <?php echo $receipt['result']; ?></p>
<p>Paid on: <?php echo $receipt['createdAt']; ?></p>
<p>Authorization Reference : <? echo $BookingResponseXML->AuthorizationReference->__toString(); ?></p>
<p>BookingReference : <? echo $BookingResponseXML->BookingReference->__toString(); ?></p>

<?php

	}
	else
	{
		echo 'Payment Details not valied'; 
	}
}
