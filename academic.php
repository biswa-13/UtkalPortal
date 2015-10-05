<?php
include 'core/init.php';
protect_page();
ob_start();

if (user_edu($session_user_id) === true) {
	
	include 'includes/widgets/loggedin/academic.php';
	
} else {

	include 'includes/widgets/loggedin/academic_update.php';

}

?>