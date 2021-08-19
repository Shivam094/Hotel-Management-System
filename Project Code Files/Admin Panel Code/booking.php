<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link href="img/Logo.png" type="img/icon" rel="icon">
	<!-- CSS only -->

<!-- CSS only -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">	
</head>
<body>
	<div id="full">
		<div id="bg" style="background-color: black; width: 100%;height: 800px;">
		<div id="header">
		<div id="logo">
			<h1><font color="white" face="Garamond"><i>WHITE  STAR GROUPS co.Ltd</i></font></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a text-decoration:none; href="index.php">HOME</a></li>
				<li><a href="room.php">ROOM UPDATE</a></li>
				<li><a href="booking.php">BOOKING</a></li>
				<li><a href="roomdetails.php">ROOM DETAILS</a></li>
				<li><a href="login.php">LOGOUT</a></li>
			</ul>
		</div>
		<table>
		<tr>
			<th width="10%" height="50px"><font color="white">Name</th>
			<th width="10%" height="50px"><font color="white">Adhar.No</th>
			<th width="10%" height="50px"><font color="white">City</th>
			<th width="10%" height="50px"><font color="white">District</th>
			<th width="10%" height="50px"><font color="white">State</th>
			<th width="10%" height="50px"><font color="white">Check-In Date</th>
			<th width="10%" height="50px"><font color="white">Check-Out Date</th>
			<th width="10%" height="50px"><font color="white">Airport Transfer</th>
			<th width="10%" height="50px"><font color="white">Members</th>
		</tr>
		<?php
          $q1="select * from form";
          $run=mysqli_query($b,$q1);
          while($row=mysqli_fetch_array($run))
          {
          	$name=$row['name'];
            $id=$row['id_no'];
            $city=$row['city'];
            $district=$row['district'];
            $state=$row['state'];
            $cidate=$row['cidate'];
            $codate=$row['codate'];
            $airport=$row['pickup'];
            $member=$row['member'];

           ?>

       
		<tr>
			<td width="10%" height="50px"><center><font color="white"><?php echo $name; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $id; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $city; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $district; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $state; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $cidate; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $codate; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $airport; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $member; ?></center></td>
		</tr>
		<?php
		   }
		?>
	</table>

<!--
	<center>
  <table>
	
	<td>
				<td><a style="color:red;" href="delbook.php">Delete Booking Record ⚠️</a></td>
	</td>
		
  </table>
  </center>
-->

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>