$(document).ready(
	function() {
	function scrollDown() {
			 $("#landing-scroll").slideDown(1500); 
			}
	setTimeout(scrollDown, 1500);
	$("#landing-text").fadeIn(2500);

	$(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
    	$("#landing-scroll").slideDown();
        console.log('Scroll up');
    }
    else {
    	 $("#landing-scroll").slideUp();
        console.log('Scroll down');
    }
});

});