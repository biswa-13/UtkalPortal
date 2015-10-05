<?php
session_start();

if (!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
		echo "<div style='color:#FF0000;'>Wrong security text.</div>";
       
    } else {
       echo "<div style='color:#009900;'> Correct security text.</div>";
    }

    $request_captcha = htmlspecialchars($_REQUEST['captcha']);

   // unset($_SESSION['captcha']);
}


?>