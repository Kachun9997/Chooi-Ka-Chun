<?php
session_start();
include 'dbh.php';


$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)) {
	header("Location:../CKC/signin.php?error=uidpass");
	
}
else {
	
	$_SESSION['id'] = $row['id'];
   $_SESSION['username'] = $row['username'];
   $_SESSION['role'] = $row['role'];
	
header("Location:useroffer.php");

}


?>