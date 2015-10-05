<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($_SESSION['user_id'], 'user_id', 'first_name', 'middle_name', 'last_name', 'email', 'phone', 'dob', 'sex', 'dept_name', 'deptrn', 'uuregno', 'address', 'password','password_recover' );
	$edu_data = edu_data($_SESSION['user_id'], 'x_board', 'x_pass', 'x_percent', 'xii_branch', 'xii_stream', 'xii_pass', 'xii_percent', 'grdu_university', 'grdu_course', 'grdu_join', 'grdu_pass', 'grdu_percent', 'pg_course', 'pg_join', 'pg_pass', 'pg_percent');
	if (user_active($user_data['email']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
	if ($current_file !== 'changepassword.php' && $user_data['password_recover'] == 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}
$errors = array();
?>