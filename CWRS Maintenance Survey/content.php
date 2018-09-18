<?php
include 'includes/header.php';

if (isset($_GET['chlorine'])) {
	include 'surveys/chlorine.php';
}

if ( isset($_GET['login']) ) {
	include 'includes/login.php';
	?>
	<script type="text/javascript">
		var loginLink = document.getElementById('login');
		loginLink.classList.add("active");
	</script>	
<?php }


if ( isset($_GET['dashboard']) ) {
	include 'includes/dashboard.php';
	?>
	<script type="text/javascript">
		var loginLink = document.getElementById('login');
		loginLink.classList.add("active");
	</script>	
<?php }

include 'includes/footer.php';
?>




