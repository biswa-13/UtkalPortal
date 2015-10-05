<?php 
include 'core/init.php';
logged_in_redirect();
ob_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Recover Password - Placement Portal - Utkal University</title>
	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="#" class="round button dark ic-left-arrow image-left ">Return to website</a>
			<p class="round button dark text-upper image-right"> <?php echo " Today is &nbsp; " .date('l, j - M - Y'); ?> </p>
		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Recover your Password - Utkal University</h1>
				<h5>Enter your email address below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="#" id="company-branding" class="fr"><img src="images/uuLogo.png" alt="Placement Portal" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	<form action="#" id="login-form"> 
	<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true ) {
	?>	
		<div class="confirmation-box round"> Thanks, we have emailed you. Please Check your email.</div>
	<?php
} else {
	$mode_allowed = array ('username', 'password');
	if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
			if(isset($_POST['email']) === true) {
			if (email_exists($_POST['email']) === true) {
				recover($_GET['mode'], $_POST['email']);
				header('Location: Recovery.php?success');
			} else if (empty($_POST['email']) === true) {
				echo '<div class="error-box round">' . 'Please enter an email address.' . '</div>';
			} else {
				echo '<div class="error-box round">' . 'We couldn\'t find that email address.' . '</div>';
		}
	}
	?>
		</form>
		<form action="" method="post" id="login-form" novalidate autocomplete="off">
		
			<fieldset>

				<p>
					<label for="login-username">Email Address</label>
					<input type="text" name="email" id="login-username" class="round full-width-input" autofocus />
				</p>
												
				<input type="submit" value="RECOVER" class="button round blue image-right ic-right-arrow">&nbsp; &nbsp; &nbsp;
				
			</fieldset>
			
		</form>
		<?php
	} else {
		header('Location: index.php');
		exit();
	}
}
	?>
		<br><br><br><br><br><br>
	</div> <!-- end content -->
	
	<?php include 'includes/footer.php'; ?>