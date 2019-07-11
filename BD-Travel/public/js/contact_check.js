$(document).ready(function(){
	$('#form_submit_button').click(function(){
		if($('#contact_form_name').val() == '' || $('#contact_form_email').val() == '' || $('#contact_form_subject').val() == '' || $('#contact_form_message').val() == ''){
			$('#contact_form_error').html('all fields required');
			return true;
		}
		else
			return false;
	});
});
