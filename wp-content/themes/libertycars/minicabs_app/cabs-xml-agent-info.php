<?php

/*
// test Server 
 $AgentId=300999;
 $Password='jEHjE5Kv';
 $VendorId=700999;

*/
//Production Server 
 $AgentId=36344;
 $Password='erwhxY8W';
 $VendorId=76344;

 
 $Time='2016-12-12T15:04:57.123Z';
 $Reference=$cabs_veh_ref;

 
 //ref for status
 if(isset($action) and $action=='cabform_request_data_ajax_call_status'){
 
 //overide ref vars, included ref
 $Reference="";
 $Reference=$cabs_ReferenceID;
 
 }
 
 
$agent_info_xml_requestP='
	<Agent Id="'.$AgentId.'">
      <Password>'.$Password.'</Password>
      <Reference>'.$Reference.'</Reference>
      <Time>'.$Time.'</Time>
   </Agent>
   <Vendor Id="'.$VendorId.'" />
   ';

?>