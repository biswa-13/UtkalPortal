<?php
include 'core/init.php';
protect_page();
ob_start();

if (user_cv($session_user_id) === true) {

	include 'includes/widgets/loggedin/cv_view.php';
	
} else {
	
	include 'includes/widgets/loggedin/cv_upload.php';

}

?>