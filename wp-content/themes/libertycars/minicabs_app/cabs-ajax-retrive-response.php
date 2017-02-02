<?php

// Make booking for Cash payment

 $response = wp_remote_post( $api_request, array(
		'method' => 'POST',
		'timeout' => 45,
		'redirection' => 5,
		'httpversion' => '1.0',
		'blocking' => true,
	    	'headers' => array('Content-type' => 'text/xml'),
		'headers' => array(),
	 	'body' =>  $string   ,
		'cookies' => array())
	);

  $responsezz = new SimpleXMLElement($response['body']);

  //  print_r( $responsezz->AgentBookingAvailabilityResponse->VendorDetails->Vehicles->VehicleInformation['0']->Make );
  //  print_r( $responsezz->VendorDetails->Fleet->Vehicles->VehicleInformation  );
  //  print_r( $responsezz->VendorDetails->Fleet->Vehicles  );
  
  $json_encode =json_encode($responsezz);
  	 echo $json_encode;
	 ///if booking success sen an email
		if($action=='cabform_request_data_ajax_call_passanger'){
			//// and if booking is sucess
			if($responsezz->Result->Success){

				 $fdAvailabilityReference=$_POST['form_data_AvailabilityReference'];
				 $cabs_IsLead=$_POST['form_data']['0']['value'];
				 $cabs_Name=$_POST['form_data']['1']['value'];
				 $cabs_EmailAddress=$_POST['form_data']['2']['value'];
				 $cabs_TelephoneNumber=$_POST['form_data']['3']['value'];
				 $cabs_DriverNote=$_POST['form_data']['4']['value'];
				 $cabs_VendorEvents=$_POST['form_data']['5']['value'];
				 $cabs_AlertMethod=$_POST['form_data']['6']['value'];
				 $cabs_AgentEvents=$_POST['form_data']['7']['value'];
				 $cabs_AgentBookingRef=$_POST['form_data']['8']['value'];
				 $cabs_veh_ref=$_POST['form_data']['9']['value'];
				 $cabs_veh_p=$_POST['form_data']['12']['value'];
				
				$post=" Name : ".$cabs_Name;
				$post.="<br> Email Address : ".$cabs_EmailAddress;
				$post.="<br> From Address : ".$FromDataAddress;
				$post.="<br> To Address : ".$ToDataAddress;
				$post.="<br> Telephone Number : ".$cabs_TelephoneNumber;
				$post.="<br> Vehicle Type : ".$cabs_VehicleType;
				$post.="<br> Driver Note : ".$cabs_DriverNote;
				$post.="<br> Booking Time : ".$BookingTime;
				$post.="<br> Payment Type : ".$PaymentType;
				
				$my_post = array(
					'post_title'    => ' User : '.$cabs_Name,
					'post_content'  => $post,
					'post_status'   => 'Private',
				);
						
				$get_id=wp_insert_post( $my_post );				
				add_post_meta($get_id,'Source', $Source);
				add_post_meta($get_id,'Currency', $Currency);
				add_post_meta($get_id,'PaymentType', $PaymentType);
				add_post_meta($get_id,'cabs_EmailAddress', $cabs_EmailAddress);
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
				add_post_meta($get_id,'cabs_veh_ref', $cabs_veh_ref);
				add_post_meta($get_id,'bookingRequest', $string);

				$to=$cabs_EmailAddress;
				$subject = 'The test subject';
				$imgUrl_LC_logo=wp_get_attachment_url(100);
				
				//echo $string;

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
				
				 // echo  $string ;
			
			}	
		}		
 	wp_die();
 ?>