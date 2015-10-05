<?php
include 'core/init.php';
protect_page();
ob_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Change Password - Placement Portal - Utkal University</title>
	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/2.1.3/normalize.css">
	<link rel="stylesheet" href="register/css/jquery.idealforms.css">
	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- jQuery & JS files -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script> 

	<style>
	body {
	font-size: 1em;
	}
	
	.field.buttons button {
	margin-right: .5em;
	}
	#invalid {
	display: none;
	float: left;
	width: 290px;
	margin-left: 120px;
	margin-top: .5em;
	color: #CC2A18;
	font-size: 130%;
	font-weight: bold;
	}
	.idealforms.adaptive #invalid {
	margin-left: 0 !important;
	}
	.idealforms.adaptive .field.buttons label {
	height: 0;
	}
	</style>
	
</head>

<body>

<?php 
include 'includes/widgets/loggedin/topbar.php';
include 'includes/widgets/loggedin/header.php';
?>		
	
	<!-- MAIN CONTENT -->
	<div id="content">
		
		<div class="page-full-width cf">

		<?php include 'includes/widgets/loggedin/sidemenu.php'; ?>
			
			<div class="side-content fr">

				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl"> Change Password </h3>
						
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main">
		

		
	<!-- Ideal Forms -->
	<div class="content" class="content" style="width: 70%; ">
    <div class="idealsteps-container">
	
<?php
if(empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'confirmpass');
	foreach($_POST as $key => $value) {
		if(empty($value) && in_array($key, $required_fields) === true) {
		 $errors[] = '<h2 align="center"><font color=red>Fields marked with an asterisk are required.</font></h2>';
		 break 1;
		}
	}
	
	if(md5($_POST['current_password']) === $user_data['password']) {
		if(trim($_POST['password']) !== trim($_POST['confirmpass'])) {
			$errors[] = 'Your new password do not match';
		} else if(strlen($_POST['password']) <6) {
			$errors[] = '<h2 align="center"><font color=red>Your password must be at least 6 characters.</font></h2>';
		}
	} else {
		$errors[] = '<h2 align="center"><font color=red>Your current password is incorrect.</font></h2>';
	}
}

if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<form id="login-form">
		<br>
		<div class="confirmation-box round"> Your password has been changed successfully</div>
	</form>
	<br><br><br><br><br><br>
<?php
} else {
	
	if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
		?>
			<p> You must change your password now that you've requested.</p>
		<?php
	}

	if(empty($_POST) === false && empty($errors) === true) {
		change_password($session_user_id, $_POST['password']);
		header('Location: ChangePassword.php?success');
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
	?>
	
	<form action="" method="post"  novalidate autocomplete="off" class="idealforms" name="myform">
	<div class="idealsteps-wrap">

	<section class="idealsteps-step" style=" padding-left:15px;">
	

	<div class="field">
    <label class="main">Current Password * :</label>
    <input name="current_password" type="password" placeholder="* * * * * * * * * * * * * * *">
    <span class="error"></span>
    </div>
	
    <div class="field">
    <label class="main">Password * :</label>
    <input name="password" type="password">
    <span class="error"></span>
    </div>

    <div class="field">
    <label class="main">Confirm * :</label>
    <input name="confirmpass" type="password">
    <span class="error"></span>
    </div>	
	
	
	<div class="field buttons">
	<label class="main">&nbsp;</label>
	<button type="submit" class="submit" value="Save">Update Password</button>
	</div>
	</section>

	
	</div>
	<span id="invalid"></span>
	</form>
	
	<?php 
	}
	?>
	
	</div>	
	</div>
					
	<!-- Ideal Forms -->
						
						
					</div> <!-- end content-module-main -->
					
				</div> <!-- end content-module -->
		
			</div> <!-- end side-content -->
		
		</div> <!-- end full-width -->
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="register/js/out/jquery.idealforms.js"></script>
		<!--<script src="js/out/jquery.idealforms.min.js"></script>-->
		<script src="register/js/formvalidator.js"></script>
	</div> <!-- end content -->
	
	<?php include 'includes/footer.php'; ?>