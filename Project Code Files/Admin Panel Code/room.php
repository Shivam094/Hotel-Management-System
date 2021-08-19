<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link href="img/Logo.png" type="img/icon" rel="icon">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
	
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
	
	<div id="full">
		<div id="bg" style="background-color: black; width: 100%; height: 800px; ">
		<div id="header">
		<div id="logo">
			<h1><font color="white" face="Garamond"><i>WHITE  STAR GROUPS co.Ltd</i></font></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#" onclick="alert('You are already in this page.');">ROOM UPDATE</a></li>
				<li><a href="booking.php">BOOKING</a></li>
				<li><a href="roomdetails.php">ROOM DETAILS</a></li>
				<li><a href="login.php">LOGOUT</a></li>
			</ul>
		</div>
	</div>
		<center><div id="form">
			<form action="room.php" method="post">
		<center><table>
			
			<tr>
				<td><font color="white">Room No</font></td>
				<td><input type="text" name="room_no" placeholder="Enter Room No" title="Enter Room No"></td>
			</tr>
			<tr>
				<td><font color="white">Room Type</font></td>
				<td><input type="text" name="room_type" placeholder="Enter Room Type" title="Enter Room Type"></td>
			</tr>
			<tr>
				<td><font color="white">Room Price</font></td>
				<td><input type="text" name="room_price" placeholder="Enter Room Price" title="Enter Room Price"></td>
			</tr>
			<td>
				<td><input class="btn btn-primary" type="submit" name="submit" value="Submit"></td>
			</td>
		</table>
	</form>
	<?php
	  if(isset($_POST['submit']))
	  {
	  	$no=$_POST['room_no'];
	  	$type=$_POST['room_type'];
	  	$price=$_POST['room_price'];
	  	if(mysqli_query($a,"insert into room(room_no,room_type,room_price) value('$no','$type','$price')"))
	  	{
	  		echo "Data Inserted";
	  	}
	  	else
	  	{
	  		echo "Data Not Inserted";
	  	}
	  }
	?>
	</center>
</div></center>
</div>
</div>
</div>
</div>
</body>
</html>