<?php
include 'core/init.php';
logged_in_redirect();

if (empty($_POST) === false){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if (empty($email) === true || empty($password) === true) {
		$errors[] = 'You need to enter a email and password.';
	}else if(email_exists($email) === false) {
		$errors[] = 'We can\'t find that email address. Have you registered ?';
	} else if (user_active($email) === false) {
		$errors[] = 'You haven\'t activated your account.';
	} else {
		
		if (strlen($password) > 32) {
			$errors[] = 'Password too long.';
		}
		
		$login = login($email, $password);
		if ($login === false) {
			$errors[] = 'That email/password combination is incorrect.';
		} else {
			$_SESSION['user_id'] = $login;
			header('Location: index.php');
			exit();
		}
	}
} else {
	$errors[] = 'No data received';
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login to Placement Portal - Utkal University</title>
	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
	<script src="js/rightclick_disable.js"></script>
</head>
<body oncontextmenu="return false">

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="./" class="round button dark ic-left-arrow image-left ">Back</a>
			<p class="round button dark text-upper image-right"> <?php echo " Today is &nbsp; " .date('l, j - M - Y'); ?> </p>
		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Login to Placement Portal - Utkal University</h1>
				<h5>Enter your credentials below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="#" id="company-branding" class="fr"><img src="images/uuLogo.png" alt="Placement Portal" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="" method="post" id="login-form" novalidate autocomplete="off">
		
			<fieldset>

				<p>
					<label for="login-username">Email</label>
					<input type="text" name="email" id="login-username" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="login-password">password</label>
					<input type="password" name="password" id="login-password" class="round full-width-input" />
				</p>
				
				<p>I've <a href="Recovery.php?mode=password">forgotten my password</a>.</p>
				
				<input type="submit" value="LOG IN" class="button round blue image-right ic-right-arrow">&nbsp; &nbsp; &nbsp;
				<a href="./register/" class="button round blue image-right ic-right-arrow"> REGISTER </a>
			</fieldset>
			
		
			<?php
			if(empty($errors) === false) {
			?>
			
			<br /><div class="error-box round">	
			We tried to log you in, but...
			<?php	
			 echo output_errors($errors);
			} 
			?>
			</div>
		</form>
		
</div> <!-- end content -->
<?php include 'includes/footer.php'; ?>