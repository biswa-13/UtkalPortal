<?php
include 'core/init.php';

if (edu_pg($session_user_id) === true) {
	
	echo $session_user_id;
	echo 'Filled';
	
} else {

	echo 'Not Filled';

}

?>