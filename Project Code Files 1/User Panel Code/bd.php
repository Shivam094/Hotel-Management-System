<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link href="img/Logo.png" type="img/icon" rel="icon">
	<!-- CSS only -->
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
				
			</ul>
		</div>
		<table>
		<tr>
			<th width="10%" height="50px"><font color="white">Name</th>
			<th width="10%" height="50px"><font color="white">Adhar.No</th>
			
			<th width="10%" height="50px"><font color="white">Check-In Date</th>
			<th width="10%" height="50px"><font color="white">Check-Out Date</th>
			<th width="10%" height="50px"><font color="white">Airport Transfer</th>
			<th width="10%" height="50px"><font color="white">Members</th>
				<th width="10%" height="50px"><font color="white">Room Type</th>
		</tr>
		<?php
          $q1="select * from form where id=(select max(id) from form)";
          $q2="select room_type from room where status='Book' ";
          $run=mysqli_query($a,$q1);
          $run2=mysqli_query($b,$q2);
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
            while($row=mysqli_fetch_array($run2))
            {
            	$room_type=$row['room_type'];
          
           ?>


           ?>
            
       
		<tr>
			<td width="10%" height="50px"><center><font color="white"><?php echo $name; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $id; ?></center></td>

			<td width="10%" height="50px"><center><font color="white"><?php echo $cidate; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $codate; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $airport; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $member; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $room_type; ?></center></td>
		</tr>
		<?php
		   }
		    }
		?>
		<td>
	</table>
<td>
	<center><h5><font color="white">* NOTE :- ₹ 500 Booking Amount Will Be Deducted From The Total Amount At The Time Of Check-In , Booked Room Can Be Upgraded Or Downgraded At The Time Of Check-In As Per Hotel's Room Availability</font></h5></center>
	<center><h5><font color="white">* NOTE :- Please Carry Your Adhar Card For Identification.</font></h5></center>
<center><h5><font color="white">* NOTE :- Hotel's Check-In Time Is 10:00 A.M & Chec-Out Time Is 12:00 P.M</font></h5></center>
<center><h5><font color="white">For More Query Reach Us At :- +91 222333897</font></h5></center>

	<form>
<center><td><input style="width: 150px;height: 30px;border-radius: 20px;opacity: 0.8" type="submit" formaction="index.php" name="submit" value="Home"></td>
</td></center>
</form>
<center>
<div style="padding-top: 10%;"><a onClick="window.print()"><font style="color:red">Download or Print This Page</font>
</a></div></center>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>