<?php
    ob_start();
	session_start();
	if(@$_SESSION['ausername'])
	{
		include '../db/config.php';
?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Shop</title>
			<!-- BOOTSTRAP STYLES -->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/mystyle.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="js/angular.js"></script>
		</head>
		<body translate="no">
			 <div class="header">
			 <?php
				$uemail = $_SESSION['ausername'];
				$sql = "SELECT * FROM `shopuer` where email='$uemail'";
				$res = mysqli_query($conn, $sql);
				$trows = mysqli_num_rows($res);
				$counts = $trows;
				$row = mysqli_fetch_array($res)
			 ?>
			  <div class="logo dropdown pull-right">
				<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Welcome <?php echo $row['name']; ?> &nbsp; &#x025BE; &nbsp;</a>
				<ul class="dropdown-menu dropdown-usermenu pull-right">
					<li><a href="view_profile.php"> View Profile</a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
				  </ul>
			  </div>
			</div>
			<!-- Content -->
			<div class="main">
			  <div class="hipsum">
				<div class="jumbotron">
				  <h1 id="hello,-world!">Samruddhiyojane Admin Profile</h1>	
					<div class="row setbgad">
						<div class="col-sm-12 setpaddingad">
							<hr>
							<table class="table table-hover table-stripped table-bordered" id="datatable-fixed-header" style="width:auto;">
								<thead>
									<tr>
										<th>Fields</th>
										<th>Details</th>
									</tr>
								</thead>
								<?php
									if($counts == 0)
									{
								?>
									<tbody>
										<tr>
											<td colspan="2" class="text-center">-- No Data Found --</td>
										</tr>
									</tbody>
								<?php
									}
									else
									{
								?>
									<tbody>	
										<tr>
											<th>Name</th>
											<td><?php echo $row['name']; ?></td>
										</tr>
										<tr>
											<th>Email</th>
											<td><?php echo $row['email']; ?></td>
										</tr>
										<tr>
											<th>Mobile</th>
											<td><?php if($row['mobile'] == ''){ echo "Not Given"; }else{echo $row['mobile']; }?></td>
										</tr>
									</tbody>
								<?php
									}
								?>
							</table>
						</div>
					</div>
				</div>
			  </div>
			</div>

			<script>
				var $rows = $('#datatables tbody tr');
				$('#adsearch').keyup(function() {
					var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
					
					$rows.show().filter(function() {
						var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
						return !~text.indexOf(val);
					}).hide();
				});
			</script>
		</body>
	</html>

<?php
}
else
{
	echo "<script language='javascript' type='text/javascript'>
		  alert('Please Login !......');
		  window.location.href = '../index';
		  </script>";
}
?>