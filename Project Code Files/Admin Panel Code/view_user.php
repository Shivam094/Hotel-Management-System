<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link rel="stylesheet" type="text/css" href="texas.css">
	<link href="img/Logo.png" type="img/icon" rel="icon">
</head>
<body>

	<table border="1" cellspacing="8" cellpadding="8" align="center">
	<thead>

		<tr style="color: red;">
			<th>SL NO</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>GENDER</th>
			<th>ADDHAR</th>
			<th>ADDRESS</th>
			<th>OPTIONS</th>
			</tr>
	</thead>
		<tbody>
		<?php
	    include 'bankheader.php';
        include 'bankfooter.php';
		include "dbconnect.php";
	$sql="SELECT * FROM users";

	$qry=mysqli_query($con,$sql);
	$count=mysqli_num_rows($qry);
	$sl=1;
	while($bag=mysqli_fetch_array($qry)){
	$id=$bag['id'];
	 ?>
	 <div style="height: 30px;"></div>
		<tr style="color: yellow;">
			<td><?php echo $sl; ?></td>
			<td><?php echo $bag['name'];?></td>
			<td><?php echo $bag['email'];?></td>
			<td><?php echo $bag['phone'];?></td>
			<td><?php echo $bag['gender'];?></td>
			<td><?php echo $bag['adhar'];?></td>
			<td><?php echo $bag['address'];?></td>
			<td>
				<?php 
				$sql="SELECT * FROM accounts WHERE user_id='$id'";
				$q=mysqli_query($con,$sql);
				$count=mysqli_num_rows($q);
				if($count==0){
				 ?>
				 <a href="createaccountprocess.php?id=<?php echo $bag['id'] ?>">Create Account</a>
				 <?php }else{ ?>
				 <?php 
				 $s="SELECT status FROM accounts WHERE user_id='$id'";
				 $qr=mysqli_query($con,$sql);
				 $b=mysqli_fetch_array($qr);
				 if($b['status']==0){
				  ?>
				  <a href="activate.php?id=<?php echo $bag['id'] ?>"><font color="red">Activate Account</font></a>
				  <?php }else{ ?>
				  <a href="deactivate.php?id=<?php echo $bag['id'] ?>"><font color="red">Deactivate Account</font></a>
				 <?php }} ?>
			</td>
		</tr>
		<?php
		$sl++;
		}?>
	</tbody>
		</table>
		
</body>
</html>



