<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Update CV - Placement Portal</title>
	
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
include 'includes/widgets/loggedin/header.php';
?>		
	
	<!-- MAIN CONTENT -->
	<div id="content">
		
		<div class="page-full-width cf">

		<?php include 'includes/widgets/loggedin/sidemenu.php'; ?>
			
			<div class="side-content fr">

				<div class="content-module">
				
					<div class="content-module-heading cf">
					
					<?php
					   define ("FILEREPOSITORY","./usr_cv");

					   if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

						  if ($_FILES['classnotes']['type'] !== "application/pdf") {
							 echo "<p>You must upload you cv in PDF format.</p>";
						  } else {
							 $name = $user_data['user_id'].'_'.md5($user_data['dob']);
							 $id=$user_data['user_id'];
							 $sql="INSERT INTO `user_cv` (`user_id`, `cv_file_name`) VALUES ($id, '$name')";
							 mysql_query($sql);
							 $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], FILEREPOSITORY."/$name.pdf");
							 header('Location: mycv.php');
							 //if ($result == 1) echo "<p>File successfully uploaded.</p>";
							// else echo "<p>There was a problem uploading the file.</p>";
						  } #endIF
					   } #endIF
					?>
					
						<h3 class="fl">Update CV (Please Upload Only <font color="red">PDF</font> files)</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>
					
					</div> <!-- end content-module-heading -->
					
					<div class="content-module-main cf">
				
						<div class="half-size-column fl">
						
							<form action="" enctype="multipart/form-data" method="post">
							
								<fieldset>
									
									<input type="file" name="classnotes" value="" />
									<br /><br />
									<input type="submit" value="Update" class="round blue ic-right-arrow" />
								</fieldset>
							
								
							</form>
						
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