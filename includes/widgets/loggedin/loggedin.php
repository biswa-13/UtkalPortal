<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Placement Portal - Utkal University</title>
	<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	
	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- jQuery & JS files -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script>  
	<script>
	function blinkFont()
	{
	  document.getElementById("blink1").style.color="blue"
	  setTimeout("setblinkFont()",400)
	}

	function setblinkFont()
	{
	  document.getElementById("blink1").style.color="red"
	  setTimeout("blinkFont()",400)
	}


	</script>
</head>

<body onload="blinkFont()">

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
					
						<h3 class="fl"> Home </h3>
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main cf">
				
						<div class="half-size-column fl">
						
							<p><font size=3 color=#3366FF> Welcome aboard on Utkal Placement Portal ! </font></p>
							<p><font color=#000033> Utkal Placement portal is connecting you with University Placement Cell.
								A platform that decreases the gap between the Students and Placement cell and Let you more interactive about recruitment process.
							</font></p>
							<p><font color=#000033> From keeping you updated on Utkal Placement to answering your queries and helping you explore a world of opportunities. </font></p>
							<p><font color=#000033> So, go ahead! Explore opportunities. Experience Certainty.   </font></p>
						
						
						</div> <!-- end half-size-column -->
						
						<div class="half-size-column fr" style=" border-style: solid; border-radius: 5px;">
						
							<div class="content-module-heading cf">
					
								<h3 class="fl" style="color: darkorange;"> Utkal Placement Notifications </h3>
							
							</div> <!-- end content-module-heading -->
							
							<div class="content-module-main">
									<ul>
											<marquee behavior="scroll" direction="up" scrollamount="3" scrolldelay="0" onMouseOver="this.stop()" onMouseOut="this.start()" style="height: 150px">

											<p>
											<a href="http://utkalplacement.org/web/jobboard.php" target="_blank">Apply for South Indian Bank recruitment drive at utkal university.</a> 
											<img src="images/new_arrow.gif">
											</p>
											
											</marquee>
											
										</ul>
				
							</div>
						</div> <!-- end half-size-column -->
				
					</div> <!-- end content-module-main -->
					
				</div> <!-- end content-module -->
		
			</div> <!-- end side-content -->
		
		</div> <!-- end full-width -->
			
	</div> <!-- end content -->