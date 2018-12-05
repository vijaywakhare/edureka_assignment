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
				  <h1 id="hello,-world!">Mobile Phones</h1>	
					<div class="row setbgad">
						<div class="col-sm-12 setpaddingad">
							<hr>
							<div class="row setsearchnshow">
								<div class="col-sm-6">
									<br>
								</div>
								<div class="col-sm-6 se6col">
									Search: <input type="text" class="mtadinput" name="adsearch" id="adsearch" placeholder="Search">
									<br>
								</div>
							</div>
									
							<div class="row">
								<div class="col-sm-12 setwad">
									<table class="table table-hover table-stripped table-bordered" id="datatables" style="width:100%;">
										<thead>
											<tr>
												<th>Product Name</th>
												<th class="text-center">Product Image</th>
												<th>Product Brand</th>
												<th>Product Cost</th>
											</tr>
										</thead>
										<?php
											$sql1 = "SELECT * FROM `product`";
											$res1 = mysqli_query($conn, $sql1);
											$trows1 = mysqli_num_rows($res1);
											$counts1 = $trows1;
											if($counts1 == 0)
											{
										?>
											<tbody>
												<tr>
													<td colspan="4" class="text-center">-- No Data Found --</td>
												</tr>
											</tbody>
										<?php
											}
											else
											{
												$j1 = 1;
												while($row1=mysqli_fetch_array($res1))
												{
										?>
													<tbody>
														<tr>
															<td><?php echo $row1['pname']; ?></td>
															<td class="text-center"><img src="assets/images/<?php echo $row1['pimg']; ?>" alt="Product Image" class="setpheight"></td>
															<td><?php echo $row1['pbrand']; ?></td>
															<td><?php echo $row1['pcost']; ?></td>
														</tr>
													</tbody>
										<?php
												$j1++;
												}
											}
										?>
									</table>
								</div>
							</div>
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