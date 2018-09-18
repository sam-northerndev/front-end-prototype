$(document).ready(
	function() {
		notifs = $('.notif');
		var windowsize = $( window ).width();

		$(notifs).each(function(index, value) { 
			 $(this).delay(1000 *index).fadeIn(1000); 
		});

		$('#yourInfo').fadeIn(1500);

		if (windowsize <= 575) {
			$("#card-button-you").click( function() {
				window.alert("working");
				//$('#information').fadeIn();
			});
		}

});