<?php

include 'dbh.php';

$id=$_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];	
$phone = $_POST['phone'];
$email = $_POST['email'];
$conpassword = $_POST['conpassword'];




    if(empty($_POST['username'])){

	     header("Location:../CKC/contact.php?error=username");
		
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['password'])){
		 header("Location:../CKC/contact.php?error=password");
	
		exit();
	}
	
	
	//Check the two passwords for equality:
	if ($_POST['password'] != $_POST['conpassword']) {
		  header("Location:../CKC/contact.php?error=conpassword'");
		
		exit();
	}
	
    if(empty($_POST['email'])){
		  header("Location:../CKC/contact.php?error=email");
		
		exit();
	}
	
	 if(empty($_POST['phone'])){
		  header("Location:../CKC/contact.php?error=phone");
		
		exit();
	}
	
	else {
		$sql= "SELECT username FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:../CKC/contact.php?error=id");
			print '<p class="error">Username Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO users (username,password,conpassword,email,phone)
			VALUES ('$username','$password','$conpassword','$email','$phone')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: signin.php");
		}
	}	
	
?>