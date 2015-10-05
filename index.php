<?php
include 'core/init.php';
if(logged_in() === true) {
		include 'includes/widgets/loggedin/loggedin.php';
	}else {
	 include 'includes/widgets/login/Login.php'; 
	}
	include 'includes/footer.php';
	
?>