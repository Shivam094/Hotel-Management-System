<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="img/Logo.png" type="img/icon" rel="icon">
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
				<li><a href="index.php">HOME</a></li>
				<li><a href="room.php">ROOM UPDATE</a></li>
				<li><a href="booking.php">BOOKING</a></li>
				<li><a href="roomdetails.php">ROOM DETAILS</a></li>
				<li><a href="login.php">LOGOUT</a></li>
			</ul>
		</div>
		<center>
	<table>	
	<form action="cancel.php" method="post">
			
			<tr>
				<td><input type="text" name="name" placeholder="Enter Your Name" title="name"></td>
			  <td><input type="text" name="ano" placeholder="Enter Adhar Number" title="ano"></td>
				<td><input class="btn btn-primary" type="submit" name="submit" value="Cancel Your Booking ❌"></td>
			</tr>
	</form>
	<center>
	<td><a href="index.php"><input class="btn btn-primary" type="submit" name="home" value="Home 🏠"></a></td>
</center>
</table>
</center>

<?php
 if(isset($_POST['submit']))
 {
 	 $name=$_POST['name'];
 	 $ano=$_POST['ano'];
 	 if(mysqli_query($f,"insert into cancel(name,id_no) value('$name','$ano') "))
 	 {
 	 	 echo '<span style="color:#AFA;text-align:center;"> You Have Successfully Raised a Cancelation Request , Your Booking Will Be Canceled Within the next 24hrs 🕰 . </span> ';
 	 	 echo '<span style="color:#AFA;text-align:center;"> ₹ 500 Booking Amount Is Non-Refundable , Thanks For Your Time . </span> ';
 	 }
 	 else
 	 {
 	 	 echo "Data Not Inserted";
 	 }
 }
?>

<!--
	<center>
  <table>
	
	<td>
				<td><a style="color:red;" href="delroom.php">Delete Room Record ⚠️</a></td>
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