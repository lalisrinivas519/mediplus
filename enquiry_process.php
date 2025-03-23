<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
		$query=mysqli_query($con,"INSERT INTO `user`(`userid`, `name`, `password`, `mobile`, `email`) 
		                                            VALUES ('$userid','$name','$password','$mobile','$email')");
		
		if($query){
			echo"<script>alert('Enquiry successful');window.location.assign('enquiry.php');</script>";
		
			
		
	}
	else{
	echo"<script>alert('Enquiry Failed');window.location.assign('enquiry.php');</script>";	
	}
}else{
	
}
?>