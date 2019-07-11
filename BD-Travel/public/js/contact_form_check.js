$(document).ready(function(){
	   $('#sentMessage').fadeOut(2000, function() {
  	 		$(this).empty().show();
		});
       
	$('#contact_form').submit(function(){

		if( $('#contact_form_subject').val() == '' || $('#contact_form_message').val() == ''){
			
			alert('asdasd');
			return false;
		}
		else{
  				if($('#contact_form_message').val().length < 20){
  					alert('The Message requires minimum 20 characters');
  					return false;	
  				}
  				else{
  					return true
  				}

		}
			
	});
});
