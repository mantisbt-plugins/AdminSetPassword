<?php
$p_javascript = "<script>
$(document).ready(function() {
	//allow admin to set password directly
	//include input for new password
	var frm = $('form[action=\"manage_user_reset.php\"]');
	$('<input type=\"password\" id=\"new_passw\" /><input type=\"submit\" value=\"".lang_get('plugin_AdminSetPassword_change_password')."\" class=\"button\" id=\"submit_newpassw\" />').prependTo(frm);
	
	frm.children('#submit_newpassw').on('click', function(){
		if($('#new_passw').val().length > 5){
		$.post(
			\"plugins/AdminSetPassword/pages/ajax.php\", 
			{user_id: $('input[name=\"user_id\"]').val(),
			 new_passw:$('#new_passw').val(),
			 manage_user_reset_token:$('input[name=\"manage_user_reset_token\"]').val()
			}
		).done(function(data) {
			$('#new_passw').val('');
			alert('".lang_get('plugin_AdminSetPassword_password_success')."');
			console.log(\"Data Loaded: \" + data);
		});
		} else {
			alert('".lang_get('plugin_AdminSetPassword_password_length')."');		
		}		

		return false;
	});
});
</script>";

