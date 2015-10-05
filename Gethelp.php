<?php
//include 'core/init.php';
//logged_in_redirect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Get Help - Placement Portal - Utkal University</title>
	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/rightclick_disable.js"></script>
</head>
<body oncontextmenu="return false">
	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="./" class="round button dark ic-left-arrow image-left ">Back</a>
			<p class="round button dark text-upper image-right"> <?php echo "Today is &nbsp; ".date('l, j - M - Y'); ?> </p>
			
			
		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
	
<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Help For PLACEMENT PORTAL</h1>
				<h5>Facing any problem to register or log in ? Get Help here.</h5>
			
			</div> <!-- login-intro -->
			
			
			<!-- The logo will automatically be resized to 79px height. -->
			<a href="index.php" id="company-branding" class="fr"><img src="images/uuLogo.png" alt="Utkal Placement" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header --> 
	
	<!-- MAIN CONTENT -->
	<div id="content">
		<div class="page-full-width cf">
			<div class="side-content fr">
				<div class="content-module">
				
				<div class="half-size-column fl">
	
					<div class="content-module">
					
						<div class="content-module-heading cf">
						
							<h3 class="fl">Get Phone Help</h3>
							<span class="fr expand-collapse-text">Click to collapse</span>
							<span class="fr expand-collapse-text initial-expand">Click to expand</span>
						
						</div> <!-- end content-module-heading -->
						
						
						<div class="content-module-main">
							<div>
								<img class="round" src="images/PhoneSupport.png" height="142" width="142"/>
							</div>
							<div class="information-box round">
							<h1>If you are facing any problem with Login/ Register/Account activation <br> please feel free to call <font color="green"><strong> +91-9692-143-848  </strong></font> between 10am to 8pm.<br></h1>
							</div>
							
					
						</div> <!-- end content-module-main -->
					
					</div> <!-- end content-module -->
	
				</div>

				<div class="half-size-column fr">

				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl">Get E-mail Help</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main cf">
				
						<div>
							<img class="round" src="images/email_uu.jpg" height="142" width="142"/>
						</div>
						<div class="information-box round">
						<h1>If you are facing any problem with Login/ Register/Account activation <br> please e-mail us <font color="green"><strong> info@utkalplacement.org </strong></font></h1>
						</font></div>
				
					</div> <!-- end content-module-main -->
				
				</div> <!-- end content-module -->

			</div>
				
				</div>
			</div>
		</div>
	</div><!-- end content -->
	
<?php include 'includes/footer.php'; ?>