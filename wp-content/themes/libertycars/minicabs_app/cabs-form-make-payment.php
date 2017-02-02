 
 
 
 <div class="booking-input-block" style="width: 50%;
    margin: 100px;" >   


 <form name="cabcancelformrequest_data" id="cabcancelformrequest_data" method="POST">


                  <h3 class="box-title"><i class="fa fa-address-card-o car-yello-icon no-anim" aria-hidden="true"></i>  Payment Details </h3>

                  <div class="blk-car-pattern">
 
                
  
                    <div class="bib-common">
                      <label for="drop-off">Payment ID</label>
						<input type="text" name="cabs_ReferenceID" value="TestRefrenceMinicabs">  <br>
                    </div>

                    <div class="bib-common bib-common-last">
                      <label for="pick-up">Payment ID</label>
						<input type="text" name="cabs_AuthorizationReferenceID" value="700999-300999-4783">  <br>
                    </div>
 
					 
			

                    
                  </div><br><br>  
				  
 
				  
						<input type="submit" value="Cancel">

							
   				    <div id="response"></div>

 </form>
  
 
  
</div>

 
 
  <div id="response"> </div>
 
  <script type="text/javascript">
 
    jQuery('#cabcancelformrequest_data').submit(ajaxSubmitcancel);
	
      function ajaxSubmitcancel(){
		
        var data_var_ajaxSubmitcancel = jQuery( '#cabcancelformrequest_data').serializeArray();
 
 
        jQuery.ajax({
             type   : "POST",
		//	             dataType: 'json',
             url    : "/liberty_cars/wp-admin/admin-ajax.php",
 		    data: { 
					action: "cabform_request_data_ajax_call_cancel",
					form_data : data_var_ajaxSubmitcancel
 					},	
			    success: function(data){
				
		 
				var obj_pas = jQuery.parseJSON(data);
				 console.log(obj_pas);

 				var JourneyDetailsf_Reference=obj_pas.Agent.Reference;
 				var JourneyDetailsf_Success=obj_pas.Result.Success;
 				var JourneyDetailsf_FailureReason=obj_pas.Result.FailureReason;
				
					    jQuery("#response").html("");

				 if(JourneyDetailsf_Success==true){
					 
				jQuery("#response").append("<br><br><p>Reference ID :   "+JourneyDetailsf_Reference+ " </p><p> Status : Booking has been cancelled </p>");
					 
				 } else {
					 
				jQuery("#response").append("<br><br><p>Reference ID :   "+JourneyDetailsf_Reference+ " </p><p> Status : Failure </p><p> Failure Reason :   "+JourneyDetailsf_FailureReason+ " </p>");
				 
				 }
            }
        });
        return false;
    }
	
   
	
</script>