<?php
include 'core/init.php';
protect_page();
ob_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Chat - Placement Portal</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- jQuery & JS files -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script>  

</head>

<body>

<?php 
include 'includes/widgets/loggedin/topbar.php';
include 'includes/widgets/loggedin/chat_header.php';
?>		
	
	<!-- MAIN CONTENT -->
	<div id="content">
		
		<div class="page-full-width cf">

		<?php include 'includes/widgets/loggedin/sidemenu.php'; ?>
			
			<div class="side-content fr">

				<div class="content-module">
				
					<div class="content-module-heading cf">
					
					
						<h3 class="fl">Chat with utkal placement</h3>
					
					</div> <!-- end content-module-heading -->
					
					<div class="content-module-main cf">
				
						<div class="half-size-column fl">
						
						<iframe width="1024" height="368" src="https://tawk.to/5efa524457a549861ba197e861cd7f697f84d112/popout/default/?$_tawk_popout=true&$_tawk_sk=556b4360b6041b02ad7cd105&$_tawk_tk=7d0300f9d2552bf1c7d04dd3e55d4b9d&v=356" ></iframe>
						
						</div> <!-- end half-size-column -->
						
				
					</div> <!-- end content-module-main -->
					
					<div class="stripe-separator"><!--  --></div>
					
				</div> <!-- end content-module -->
		
			</div> <!-- end side-content -->
		
		</div> <!-- end full-width -->
			
	</div> <!-- end content -->

<?php
include 'includes/footer.php';
?>