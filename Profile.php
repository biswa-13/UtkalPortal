<?php
include 'core/init.php';
protect_page();
ob_start();

?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Profile - Placement Portal</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- jQuery & JS files -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script>  
	<style>
	.pic-round-corner {

	display: block;

	width: 200px;

	height: 200px;

	margin: 1.8em 0.001em;

	background-size: cover;

	background-repeat: no-repeat;

	background-position: center center;

	-webkit-border-radius: 15px;

	-moz-border-radius: 15px;

	border-radius: 15px;

	border: 5px solid #eee;

	box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);

	}
	
	.custom-file-input::-webkit-file-upload-button {
	visibility: hidden;
	
  
}
.custom-file-input::before {
  content: 'Select Image To Upload';
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
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
					
						<h3 class="fl"><?php echo $user_data['first_name']; ?>'s  Profile</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>
					
					</div> <!-- end content-module-heading -->
					
					<div class="content-module-main cf">
				
						<div class="half-size-column fl">

							<form action="" method="post" enctype="multipart/form-data">
							
								<fieldset>
									
									<p>
										<label for="simple-input">First Name</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['first_name'];?>" />
									</p>
									
									<p>
										<label for="simple-input">Middle Name</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['middle_name'];?>" />
									</p>
									
									<p>
										<label for="simple-input">Last Name</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['last_name'];?>" />
									</p>
									
								</fieldset>
							
							</form>
						
						</div> <!-- end half-size-column -->
						
						<div class="half-size-column fr">
						
						<?php
								if(empty($_POST) === false) {
								
								$target_dir = "usr_img/profile_img/";
								$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
								$uploadOk = 1;
								$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								// Check if image file is a actual image or fake image
								if(isset($_POST["submit"])) {
									$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
									if($check !== false) {
										//echo "File is an image - " . $check["mime"] . ".";
										$uploadOk = 1;
									} else {
										echo "File is not an image.";
										$uploadOk = 0;
									}
								}
								// Check if file already exists
								if (file_exists($target_file)) {
									echo "Sorry, file already exists.";
									$uploadOk = 0;
								}
								// Check file size
								if ($_FILES["fileToUpload"]["size"] > 500000) {
									echo "Sorry, your file is too large.";
									$uploadOk = 0;
								}
								// Allow certain file formats
								if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
								&& $imageFileType != "gif" ) {
									echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
									$uploadOk = 0;
								}
								// Check if $uploadOk is set to 0 by an error
								if ($uploadOk == 0) {
									echo "Sorry, your file was not uploaded.";
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
										
										//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
										die(header("Location: profile.php"));
										
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}
								
							}
								?>
						
						
						
						
							<form action="" method="post" enctype="multipart/form-data">
							
								<fieldset>
									<img src="usr_img/profile_img/anit2.jpg" alt="profile picture css" class="pic-round-corner"/>
									<p>
										<!-- <label for="simple-input">Select image to upload:</label> -->
										<input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
										
									</p>
									
									
									<input type="submit" value="Update" name="submit" class="round blue ic-right-arrow">
								
									
								</fieldset>
							
							</form>
							
						</div> <!-- end half-size-column -->
						
				
					</div> <!-- end content-module-main -->
					
					<div class="stripe-separator"><!--  --></div>
					
					<div class="content-module-main cf">
				
						<div class="half-size-column fl">
						
							<form action="#">
							
								<fieldset>
								
									
									<p>
										<label for="simple-input">Email</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['email'];?>" />
									</p>
									
									<p>
										<label for="simple-input">Phone</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['phone'];?>" />
									</p>
									
									<p>
										<label for="simple-input">DOB</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['dob'];?>" />
									</p>
									
								</fieldset>
							
							</form>
						
						</div> <!-- end half-size-column -->
						
						<div class="half-size-column fr">
						
							<form action="#">
							
								<fieldset>
									
									<p>
										<label for="simple-input">Department</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['dept_name'];?>" />
									</p>
									
									<p>
										<label for="simple-input">Dept. Roll No</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['deptrn'];?>" />
									</p>
									
									<p>
										<label for="simple-input">UU Reg No</label>
										<input type="text" id="simple-input" class="round default-width-input" value="<?php echo $user_data['uuregno'];?>" />
									</p>
									
									<p>
										<label for="full-width-input">Address</label>
										<input type="text" id="full-width-input" class="round full-width-input" value="<?php echo $user_data['address'];?>" />
										<em>Permanent address (Full)</em>								
									</p>

									<div class="stripe-separator"><!--  --></div>
				
									<input type="submit" value="Update" class="round blue ic-right-arrow" />
									
								</fieldset>
							
							</form>
							
						</div> <!-- end half-size-column -->
				
					</div> <!-- end content-module-main -->
					
				</div> <!-- end content-module -->
		
			</div> <!-- end side-content -->
		
		</div> <!-- end full-width -->
			
	</div> <!-- end content -->
<?php
include 'includes/footer.php';
?>