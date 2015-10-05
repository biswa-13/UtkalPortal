
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
	if(empty($_POST['pg_course']) === true || empty($_POST['pg_join']) === true || empty($_POST['pg_pass']) === true || empty($_POST['pg_percent']) === true){
		$academic_data = array (
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
			'user_id'		  => $session_user_id
		); 
		} else {
		
		$academic_data = array (
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
			'user_id'		  => $session_user_id
		); 
		
		}
		
		
		academic_data($academic_data);
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
	<label><strong> Tenth Details * </strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main">Board * :</label>
	<select name="x_board" id="">
	<option value="default">&ndash; Select a Board &ndash;</option>
	<option value="State Board">State Board</option>
	<option value="CBSE">CBSE</option>
	<option value="ICSE">ICSE</option>
	</select>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing * :</label>
	<input name="x_pass" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % * :</label>
	<input name="x_percent" type="text">
	<span class="error"></span> </div>

	<div class="field">
	<br/><label><strong> XII / Diploma Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main">Completed * :</label>
	<select name="xii_branch" id="">
	<option value="default">&ndash; Select a Branch &ndash;</option>
	<option value="XII">XII</option>
	<option value="Diploma">Diploma</option>
	<option value="Equivalent to XII">Equivalent to XII</option>
	</select>
	<span class="error"></span> 
	</div>

	<div class="field">
	<label class="main">Stream * :</label>
	<input name="xii_stream" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing * :</label>
	<input name="xii_pass" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % * :</label>
	<input name="xii_percent" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<br/><label><strong> Graduation Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main"> University * :</label>
	<input name="grdu_university" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Course * :</label>
	<select name="grdu_course" id="">
	<option value="default">&ndash; Select an option &ndash;</option>
	<option value="Bachelor of Computer Applications(BCA)">Bachelor of Computer Applications(BCA)</option>
	<option value="Bachelor of Information Technology Management(BITM)">Bachelor of Information Technology Management(BITM)</option>
	<option value="Bachelor of Business Administration(B.B.A)">Bachelor of Business Administration(B.B.A)</option>
	<option value="Bachelor of Arts Bachelor of Law(B.A.LLB)">Bachelor of Arts Bachelor of Law(B.A.LLB)</option>
	<option value="Bachelor of Law(LL.B)">Bachelor of Law(LL.B)</option>
	<option value="Bachelor of Science(B.Sc)">Bachelor of Science(B.Sc)</option>
	<option value="Bachelor of Commerce(B.Com)">Bachelor of Commerce(B.Com)</option>
	<option value="Bachelor of Arts(B.A)">Bachelor of Arts(B.A)</option>
	<option value="Bachelor of Applied Sciences(B.A.S)">Bachelor of Applied Sciences(B.A.S)</option>
	<option value="Bachelor of Architecture(B.Arch)">Bachelor of Architecture(B.Arch)</option>
	<option value="Bachelor of Arts Bachelor of Education(B.A. B.Ed)">Bachelor of Arts Bachelor of Education(B.A. B.Ed)</option>
	<option value="Bachelor of Business Administration Bachelor of Law(B.B.A LL.B)">Bachelor of Business Administration Bachelor of Law(B.B.A LL.B)</option>
	<option value="Bachelor of Business Management(B.B.M)">Bachelor of Business Management(B.B.M)</option>
	<option value="Bachelor of Business Studies(B.B.S)">Bachelor of Business Studies(B.B.S)</option>
	<option value="Bachelor of Computer Science(B.C.S)">Bachelor of Computer Science(B.C.S)</option>
	<option value="Bachelor of Education(B.Ed)">Bachelor of Education(B.Ed)</option>
	<option value="Bachelor of Electronic Science(B.E.S)">Bachelor of Electronic Science(B.E.S)</option>
	<option value="Bachelor of Hotel Management(B.H.M)">Bachelor of Hotel Management(B.H.M)</option>
	<option value="Bachelor of Pharmacy(B.Pharma)">Bachelor of Pharmacy(B.Pharma)</option>
	</select>
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Joining * :</label>
	<input name="grdu_join" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Year Of Passing * :</label>
	<input name="grdu_pass" type="text">
	<span class="error"></span> </div>
	
	<div class="field">
	<label class="main">Mark secured in % * :</label>
	<input name="grdu_percent" type="text">
	<span class="error"></span> </div>
	
		
	<div class="field">
	<br><br>
	<p class="group">
	<label><input type="checkbox" name="cb" id="cb" onchange="chgtx();" />I've done PG. Check if yes</label>
	</p>
	</div>
			
	<div class="field">
	<label><strong> Post Graduation Details *</strong></label><br/>
	</div>
	
	<div class="field">
	<label class="main">Course *:</label>
	<select name="pg_course" id="">
	<option value="default">&ndash; Select an option &ndash;</option>
	<option value="Analytical and Applied Economics">Analytical and Applied Economics</option>
	<option value="Ancient Indian History, Culture and Archaeology">Ancient Indian History, Culture and Archaeology</option>
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
	<option value="Mathematics">Master in Computer Application (MCA)</option>
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