<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	
		$query=mysqli_query($con,"INSERT INTO `user`(`name`, `mobile`, `email`, `subject`, `message`) 
		                                              VALUES ('$name','$mobile','$email','$subject','$message')");
		
		if($query){
			echo"<script>alert('message sent successful');window.location.assign('contact.php');</script>";
		
			
		
	}
	else{
	echo"<script>alert('message Failed');window.location.assign('contact.php');</script>";	
	}
}else{
	
}
?>