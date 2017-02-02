 
 
 
 <div class="booking-input-block" style="width: 50%;
    margin: 100px;" >   


 <form name="cabstatusformrequest_data" id="cabstatusformrequest_data" method="POST">


                  <h3 class="box-title"><i class="fa fa-address-card-o car-yello-icon no-anim" aria-hidden="true"></i>  Booking Details </h3>

                  <div class="blk-car-pattern">
 
                
  
                    <div class="bib-common">
                      <label for="drop-off">Reference ID</label>
                      <input type="text" name="cabs_ReferenceID" value="">
                    </div>

                    <div class="bib-common bib-common-last">
                      <label for="pick-up">Authorization Reference ID</label>
					<input type="text" name="cabs_AuthorizationReferenceID" value="">  <br>
                    </div>
							
					 
			

                    
                  </div><br><br>  
				  
 
				  
				  			<input type="submit" value="Check" style="color:black">

							
   				    <div id="response"></div>

 </form>
 
 
  
</div>
				
				
				

<br>  
 
  
 
  <script type="text/javascript">
 
    jQuery('#cabstatusformrequest_data').submit(ajaxSubmitstatus);
	
      function ajaxSubmitstatus(){
		
        var data_var_ajaxSubmitstatus = jQuery( '#cabstatusformrequest_data').serializeArray();
 
 
        jQuery.ajax({
             type   : "POST",
		//	             dataType: 'json',
             url    : "/liberty_cars/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call_status",
					form_data : data_var_ajaxSubmitstatus
 					},	
			    success: function(data){
					
		 
				var obj_pas = jQuery.parseJSON(data);
 				var BookingReference_pas=JSON.stringify(data);
				
					    jQuery("#response").html("");

				//console.log(obj_pas);
				
 				 				var BookingReference_pas=obj_pas.BookingReference;
								
 				 				var JourneyDetailsf_pas=obj_pas.JourneyDetails.From.Data;
 				 				var JourneyDetailst_pas=obj_pas.JourneyDetails.To.Data;
				//var AuthorizationReference=obj_pas.AuthorizationReference;
 				
			jQuery("#response").append("<p style='color:green'> Success </p>  <p> Booking Reference :  "+BookingReference_pas+ " </p><p> From :  "+JourneyDetailsf_pas+ " </p> <p> To :  "+JourneyDetailst_pas+ " </p> ");
				  
            }
        });
        return false;
    }
	
   
	
</script>