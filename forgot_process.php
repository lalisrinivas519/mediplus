<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$old=$_POST['old'];
	$new=$_POST['new'];
	$confirm=$_POST['confirm'];
	$userid=$_POST['userid'];
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
	$row_old_password=mysqli_fetch_array($query);
	$password=$row_old_password['password'];
	if($password===$old){
		if($new==$confirm){
			$update=mysqli_query($con,"UPDATE `user` SET `password`='$confirm' WHERE `userid`='$userid'");
			echo"<script>alert('update successful');window.location.assign('forgot.php');</script>";
		}
		else{
			echo"<script>alert('old and new doesn't match');window.location.assign('forgot.php');</script>";
		}
	}
	else{
		echo"<script>alert('old password doesn't match');window.location.assign('forgot.php');</script>";
	}
}
else{
}
?>	