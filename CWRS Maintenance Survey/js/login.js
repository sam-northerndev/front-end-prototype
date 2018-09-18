$(document).ready(function(){
	$("#con-password").keyup(function(){
		if ($("#init-password").val() != $("#con-password").val()) {
			$("#msg").html("Passwords do not match").css("color","red");
		}else{
			$("#msg").html("Passwords matched").css("color","green");
		}
	});
});