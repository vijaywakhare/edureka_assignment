<?php
session_start();
session_destroy();
echo "<script language='javascript' type='text/javascript'>
	  alert('Logout Success');
	  window.location.href = '../index';
	  </script>";
?>

