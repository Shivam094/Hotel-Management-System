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
		<table>
		<tr>
			<th width="20%" height="50px"><font color="white">Room.No</th>
			<th width="20%" height="50px"><font color="white">Room Type</th>
			<th width="20%" height="50px"><font color="white">Price</th>
			<th width="20%" height="50px"><font color="white">Status</th>
			<th width="8%" height="50px"><font color="white">Option</th>
			<th width="20%" height="50px"><font color="white">User Adhar.No</th>
		</tr>
		<?php
          $q1="select * from room where status='Book' ";
          $q2="select id_no from form where id=(select max(id) from form)";
          $run=mysqli_query($a,$q1);
          $run2=mysqli_query($b,$q2);
          while($row=mysqli_fetch_array($run))
          {
          	$rno=$row['room_no'];
            $type=$row['room_type'];
            $price=$row['room_price'];
            $status=$row['status'];
            while($row1=mysqli_fetch_array($run2))
            {

               $id_no=$row1['id_no'];
               ?>

           ?>
		<tr>
			<td width="20%" height="50px"><center><font color="white"><?php echo $rno; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $type; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $price; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $status; ?></center></td>
			<td width="20%" height="50px"><a style="color: red" href="co.php? rno=<?php echo $rno; ?>"><b>Check-Out</b>
				<td width="20%" height="50px"><center><font color="white"><?php echo $id_no; ?></center></td>
			</a></td>
		</tr>
		<?php
          }
        }
      ?>

<?php
          $q1="select * from room where status='Un Book' ";
          
          $run=mysqli_query($a,$q1);
          
          while($row=mysqli_fetch_array($run))
          {
          	$rno=$row['room_no'];
            $type=$row['room_type'];
            $price=$row['room_price'];
            $status=$row['status'];
           ?> 
		<tr>
			<td width="20%" height="50px"><center><font color="white"><?php echo $rno; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $type; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $price; ?></center></td>
			<td width="20%" height="50px"><center><font color="white"><?php echo $status; ?></center></td>
			<td width="20%" height="50px"><a style="color: red" href="co.php? rno=<?php echo $rno; ?>"><b>Check-Out</b>
				
			</a></td>
		</tr>
		<?php
          }
      ?>

</table>
<center>
<table>

	<form action="roomdetails.php" method="get">
			
			<tr>
				<td><input type="text" name="rno" placeholder="Enter Room Number" title="rno"></td>
			
				<td><input class="btn btn-primary" type="submit" name="submit" value="Delete Room ▲"></td>
			</tr>
			
	</form>
</table>
</center>

<?php
 if(isset($_GET['submit']))
 {
 	 $rno=$_GET['rno'];
 	 $del=mysqli_query($a,"delete from room where room_no='$rno' ");
 	 if($del)
 	 {
 	 	 mysqli_close($a);
 	 	 header("location:roomdetails.php");
 	 	 echo "Enter Room Number Once Again To Delete";
 	 	 exit;
 	 }
 	 else
 	 {
 	 	 echo "Error Deleting Data";
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