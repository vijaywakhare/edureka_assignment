<?php
include('db/config.php');
extract($_POST);

if($username != '')
{
	$querys1 = "SELECT * FROM `shopuer` WHERE `email` LIKE '$emailAdress'";
	$results1 = mysqli_query($conn, $querys1);

	$num = mysqli_num_rows($results1);

	if($num == 0)
	{
		if($password == $passwordCon)
		{
			$salt = '-45dfeHK/__yu349@-/klF21-1_\/4JkUP/4';
			$mypass = md5($salt, $password);
			$sql = "INSERT INTO shopuer(name, email, mobile, pass) VALUES ('$username', '$emailAdress', '$phone', '$mypass');";
			$status = mysqli_query($conn, $sql);//executing the query.
			if($status == true)
			{
				session_start();
				$_SESSION['ausername']=$emailAdress;
				echo "<script>
					alert('Welcome ".$username."');
					window.location.href='user/index';
					</script>";
			}
			else
			{
				echo "<script>
					alert('Unable to save Data. Please Try Again');
					window.location.href='index';
					</script>";
			}
		}
		else
		{
			echo "<script>
				alert('Password & Confirm Password are Not Same, Try Again');
				window.location.href='index';
				</script>";
		}
	}
	else
	{
		echo "<script>
			alert('User with this email is already there. Please Login or Register with another email address');
			window.location.href='index';
			</script>";
	}
}
else
{
	echo "<script>
		alert('Fill All The Detail & Try Again');
		window.location.href='index';
		</script>";
}
?>