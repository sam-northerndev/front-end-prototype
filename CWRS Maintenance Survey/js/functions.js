$(document).ready(
	function() {
		$('.container-fluid').fadeIn(500);
		//this section of functions is for the survey landing page
		$surveys = $(".survey-start");
		var windowsize = $( window ).width();

		$("#card-button-monitoring").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").slideUp("slow");
			}
				$surveys.not( $(".monitoring") ).hide();
				$(".monitoring").fadeToggle("slow");
				if ( windowsize < 576) {
					$("#menu-open").fadeIn("slow");
				}
			
		});
		$("#card-button-maintenance").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").slideUp("slow");
			}
				$surveys.not( $(".maintenance") ).hide();
				$(".maintenance").fadeToggle("slow");
				if ( windowsize < 576) {
					$("#menu-open").fadeIn("slow");
				}
			
		});
		$("#card-button-results").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").slideUp("slow");
			}
				$surveys.not( $(".results") ).hide();
				$(".results").fadeToggle("slow");
				if ( windowsize < 576) {
					$("#menu-open").fadeIn("slow");
				}
			
		});
		$("#card-button-daily").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").slideUp("slow");
			}
				$surveys.not( $(".daily") ).hide();
				$(".daily").fadeToggle("slow");
				if ( windowsize < 576) {
					$("#menu-open").fadeIn("slow");
				}
			
		});
		$("#menu-open").click( function()  {
			if ( windowsize < 576) {
				$("#menu-open").slideUp();
				$surveys.slideUp(0);
				$(".card-button").slideDown("slow");

			}
		});

		//This section of functions is for the chlorine survey page
		$forms = $(".form-survey");
		$pages = $(".page")


		$("#card-button-return").click( function()  {
			$(".card").slideUp("slow");
			function redirect() {
			 window.location.replace("survey_start.php"); 
			}

			setTimeout(redirect, 600);
		});
		$("#card-button-treatment").click( function()  {
			//if ( windowsize < 576) {
				$(".chlorine-landing").slideUp("slow");
			//}
				$pages.not( $(".treatmeant") ).hide();
				$(".treatment").fadeToggle("slow");
		});

		$("#card-button-plant").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").hide();
			}
				$forms.not( $(".plant") ).hide();
				$(".plant").fadeToggle("slow");
		});

		$("#card-button-distribution").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").hide();
			}
				$forms.not( $(".distribution") ).hide();
				$(".distribution").fadeToggle("slow");
		});


		//This section of the functions is for the login page
		$("#card-button-login").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").hide();
			}
				$pages.not( $(".login-page") ).hide();
				$(".login-page").fadeToggle("slow");
				if ( windowsize < 576) {
					$(".return-button").fadeIn("slow");
				}
		});

		$("#card-button-register").click( function()  {
			if ( windowsize < 576) {
				$(".card-button").hide();
			}
				$pages.not( $(".register-page") ).hide();
				$(".register-page").fadeToggle("slow");
				if ( windowsize < 576) {
					$(".return-button").fadeIn("slow");
				}

		});
		$(".return-button").click( function()  {
			$(".card").slideUp("slow");
			function redirect() {
			 window.location.replace("content.php?login=1"); 
			}

			setTimeout(redirect, 600);
		});

});