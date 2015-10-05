
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title><?php echo $user_data['first_name']; ?> - Academic Details - Placement Portal - Utkal University</title>
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
					
						<h3 class="fl"> Academic Details </h3>
						
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main">
		

		
	<!-- Ideal Forms -->
	<div class="content" class="content" style="width: 70%; ">
    <div class="idealsteps-container">
	
<?php
if(empty($_POST) === false) {
	$required_fields = array('x_board', 'x_pass', 'x_percent', 'xii_branch', 'xii_stream', 'xii_pass', 'xii_percent', 'grdu_university', 'grdu_course', 'grdu_join', 'grdu_pass', 'grdu_percent' );
	foreach($_POST as $key => $value) {
		if(empty($value) && in_array($key, $required_fields) === true) {
		 $errors[] = 'Fields marked with an asterisk are required.';
		 break 1;
		}
	}
	
	if(empty($errors) === true) {
		if ($_POST['grdu_pass'] <= $_POST['grdu_join'] &&  $_POST['grdu_pass'] >= 2020 && $_POST['grdu_join'] <= 1990) {
			$errors[] = '<h2 align="center"><font color=red>A valid Graduation passing year required.</font></h2>';
		}
	}
}

if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<form id="login-form">
		<br>
		<div class="confirmation-box round"><h1> Your data has been updated successfully ! </h1></div>
	</form>
	<br><br><br><br><br><br>
<?php
} else {
	
	if(empty($_POST) === false && empty($errors) === true) {
		$academic_data_update = array (
			'x_board' 		  => $_POST['x_board'],
			'x_pass' 		  => $_POST['x_pass'],
			'x_percent'   	  => $_POST['x_percent'],
			'xii_branch' 	  => $_POST['xii_branch'],
			'xii_stream' 	  => $_POST['xii_stream'],
			'xii_pass' 		  => $_POST['xii_pass'],
			'xii_percent'     => $_POST['xii_percent'],
			'grdu_university' => $_POST['grdu_university'],
			'grdu_course'     => $_POST['grdu_course'],
			'grdu_join' 	  => $_POST['grdu_join'],
			'grdu_pass' 	  => $_POST['grdu_pass'],
			'grdu_percent'	  => $_POST['grdu_percent'],
			'pg_course'	  	  => $_POST['pg_course'],
			'pg_join'	  	  => $_POST['pg_join'],
			'pg_pass'	  	  => $_POST['pg_pass'],
			'pg_percent'	  => $_POST['pg_percent'],
		);
		academic_data_update($session_user_id, $academic_data_update);
		header('Location: academic.php ');
		//exit();
	} else if(empty($errors) === false){
		echo output_errors($errors);
		
	}
?>
	
	<form action="" method="post"  novalidate autocomplete="off" class="idealforms" name="myform">
	<div class="idealsteps-wrap">

	<section class="idealsteps-step" style=" padding-left:15px;">
	
	<div class="field">
	<label><strong> Tenth Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main">Board :</label>
	<input name="x_board" type="text" value="<?php echo $edu_data['x_board']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing :</label>
	<input name="x_pass" type="text" value="<?php echo $edu_data['x_pass']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % :</label>
	<input name="x_percent" type="text" value="<?php echo $edu_data['x_percent']; ?>" readonly>
	<span class="error"></span> </div>

	<div class="field">
	<br/><label><strong> Twelfth/Diploma Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main">Completed :</label>
	<input name="xii_branch" type="text" value="<?php echo $edu_data['xii_branch']; ?>" readonly>
	<span class="error"></span> </div>

	<div class="field">
	<label class="main">Stream :</label>
	<input name="xii_stream" type="text" value="<?php echo $edu_data['xii_stream']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing :</label>
	<input name="xii_pass" type="text" value="<?php echo $edu_data['xii_pass']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % :</label>
	<input name="xii_percent" type="text" value="<?php echo $edu_data['xii_percent']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<br/><label><strong> Graduation Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main"> University :</label>
	<input name="grdu_university" type="text" value="<?php echo $edu_data['grdu_university']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Course :</label>
	<input name="grdu_course" type="text" value="<?php echo $edu_data['grdu_course']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Joining :</label>
	<input name="grdu_join" type="text" value="<?php echo $edu_data['grdu_join']; ?>" readonly>
	<span class="error"></span> </div>
	
	
	<div class="field">
	<label class="main">Year Of Passing :</label>
	<input name="grdu_pass" type="text" value="<?php echo $edu_data['grdu_pass']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % * :</label>
	<input name="grdu_percent" type="text" value="<?php echo $edu_data['grdu_percent']; ?>" >
	<span class="error"></span> </div>
	
		
	<div class="field">
	<br><br>
	<p class="group">
	<?php
	if (edu_pg($session_user_id) === true) {
	?>
	<label><input type="checkbox" name="cb" id="cb" onchange="chgtx();" />Edit my PG Mark</label>
	<?php
	} else {
	?>
	<label><input type="checkbox" name="cb" id="cb" onchange="chgtx();" />I've done PG. Check if yes</label>
	<?php
	}
	?>
	</p>
	</div>
			
	<div class="field">
	<label><strong> Post Graduation Details *</strong></label><br/>
	</div>
	<?php
	if (edu_pg($session_user_id) === true) {
	?>
	
	<div class="field">
	<label class="main">Course :</label>
	<input name="pg_course" type="text" value="<?php echo $edu_data['pg_course']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Joining :</label>
	<input name="pg_join" type="text" value="<?php echo $edu_data['pg_join']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing :</label>
	<input name="pg_pass" type="text" value="<?php echo $edu_data['pg_pass']; ?>" readonly>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % *:</label>
	<input name="pg_percent" type="text" value="<?php echo $edu_data['pg_percent']; ?>" >
	<span class="error"></span> </div>
	
	<?php
	} else {
	?>
	
	<div class="field">
	<label class="main">Course *:</label>
	<select name="pg_course" id="">
	<option value="default">&ndash; Select an option &ndash;</option>
	<option value="A.A.E">Analytical and Applied Economics</option>
	<option value="A.I.H.C.A">Ancient Indian History, Culture and Archaeology</option>
	<option value="Anthropology">Anthropology</option>
	<option value="Biotechnology">Biotechnology</option>
	<option value="Botany">Botany</option>
	<option value="Business Administration">Business Administration</option>
	<option value="Chemistry">Chemistry</option>
	<option value="Commerce">Commerce</option>
	<option value="Computer Science">Computer Science and Applications</option>
	<option value="English">English</option>
	<option value="Geography">Geography</option>
	<option value="Geology">Geology</option>
	<option value="History">History</option>
	<option value="Law">Law</option>
	<option value="L.I.S">Library and Information Science</option>
	<option value="Mathematics">Mathematics</option>
	<option value="Oriya">Oriya</option>
	<option value="P.M.I.R">Personnel Management and Industrial Relations</option>
	<option value="Philosophy">Philosophy</option>
	<option value="Physics">Physics</option>
	<option value="Political Science">Political Science</option>
	<option value="Psychology">Psychology</option>
	<option value="Public Administration">Public Administration</option>
	<option value="Sanskrit">Sanskrit</option>
	<option value="Sociology">Sociology</option>
	<option value="Statistics">Statistics</option>
	<option value="Zoology">Zoology</option>
	<option value="Others">Others</option>
	</select>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Joining *:</label>
	<input name="pg_join" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing *:</label>
	<input name="pg_pass" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % *:</label>
	<input name="pg_percent" type="text">
	<span class="error"></span> </div>
	
	<?php
	}
	?>
	
	<div class="field buttons">
	<label class="main">&nbsp;</label>
	<button type="submit" class="submit" value="Save">Save</button>
	</div>
	</section>

	
	</div>
	<span id="invalid"></span>
	</form>
	
	<?php 
	}
	?>
	
	<br> <div class="information-box round">If your Course/Department is not listed in above lists, then please contact PLACEMENT CELL immediately. <a href="http://localhost/app/usr/Gethelp.php" target="_blank"> Click Here </a> </div>
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
		<script>
		function start() {
		myform.pg_course.disabled = true;
		myform.pg_join.disabled = true;
		myform.pg_pass.disabled = true;
		myform.pg_percent.disabled = true;
		}
		onload = start;
		function chgtx() {
		myform.pg_course.disabled = !myform.cb.checked;
		myform.pg_join.disabled = !myform.cb.checked;
		myform.pg_pass.disabled = !myform.cb.checked;
		myform.pg_percent.disabled = !myform.cb.checked;
		}
		</script>
	</div> <!-- end content -->
	
	<?php include 'includes/footer.php'; ?>