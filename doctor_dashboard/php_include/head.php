

<?php 
	include("php_include/connect.php");
	include("php_include/check_login.php");
	
	$userid = $_SESSION['userid'];
?>
<title>Doctor_Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/logo.jpg">
<!-- VENDOR CSS -->
<link rel="stylesheet" href=" assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href=" assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href=" assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href=" assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href=" assets/vendor/toastr/toastr.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">