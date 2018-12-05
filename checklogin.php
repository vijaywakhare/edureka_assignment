<?php

$loginemail = $_POST['loginemail'];

$salt = '-45dfeHK/__yu349@-/klF21-1_\/4JkUP/4';
$loginPassword = md5($salt, $_POST['loginPassword']);
include 'db/config.php';
$query = "SELECT * FROM `shopuer` WHERE `email` LIKE '$loginemail' AND `pass` LIKE '$loginPassword'";
$result = mysqli_query($conn, $query);

$num=mysqli_num_rows($result);

if($num==0)
{
	echo "<script>
			alert('Email Addres Or Password is wrong, try again');
			window.location.href='index';
			</script>";
}else{
	
	session_start();
	$_SESSION['ausername']=$loginemail;
	echo "<script>
		alert('Welcome Back');
		window.location.href='user/index';
		</script>";
}
?>