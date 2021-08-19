<?php
include("connection.php");
 $r=$_GET['room'];
 $ci=$_GET['ci'];
 $co=$_GET['co'];
 $d=$_GET['destination'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<link href="img/Logo.png" type="img/icon" rel="icon">
	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/user.css">

	
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/TWA.jpeg'); width: 100%;height: 800px;background-repeat: no-repeat;margin-right: 20%;background-size: cover;">
		<div id="header">
		<div id="logo">
			<h1><font color="white" face="Garamond"><i>WHITE  STAR GROUPS co.Ltd</i></font></h1>
		</div>
		<div id="nav">
			<div class="menu-bar">
			<ul>
				<li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
				<li><a href="connect.php"><i class="fa fa-phone"></i> CONNECT</a></li>
				<li><a href="about.php"><i class="fa fa-info-circle"></i> ABOUT US</a></li>
				<li><a href="help.php"><i class="fa fa-medkit"></i> HELP</a></li>
			</ul>
		</div>
		</div>
	</div>
		<div id="form">
			<form action="form.php" method="POST">
		  <table style="padding-left: 70%;">
			<?php
			$q1="select * from room where status='Un Book' ";
              $run=mysqli_query($b,$q1);
              $row=mysqli_fetch_array($run);
              $rno=$row['room_no'];

              $q="select * from room where status='Un Book' ";
              $run=mysqli_query($b,$q);
              $num=mysqli_num_rows($run);
              echo $num;
              if ($r<=$num) 
              {
              	?>
              	<tr>
				<td><font color="white"><b>Status</b></font></td>
			    <td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
			</tr>
			<tr>
				<td><font color="white"><b>Name</b></font></td>
				<td><input type="text" name="name" placeholder="Enter Your Name" title="Name"></td>
				<td><font color="white"><b>Adhar.No</b></font></td>
				<td><input type="No" name="idno" placeholder="Enter ADHAR.No" title="ID"></td>
			</tr>
			<tr>
				<td><font color="white"><b>Destination</b></font></td>
				<td><input type="text" name="Destination" value="<?php echo $d; ?>" title="Destination"></td>
			</tr>
			<tr>
				<td><font color="white"><b>Address</b></font></td>
				<td><input type="text" name="Address" placeholder="Enter Address" title="Address"></td>
			</tr>
			<tr>
				<td><font color="white"><b>City</font></td>
				<td><select name="City">
					<option>--Select--</option>
					<option>Mumbai</option>
					<option>Bangalore</option>
					<option>Kolkata</option>
					<option>Any Other Location Within India</option>
				</select></td>
			</tr>
			<tr>
				<td><font color="white"><b>District</font></td>
				<td><select name="District">
					<option>--Select--</option>
					<option>Mumbai</option>
					<option>Bangalore</option>
					<option>Kolkata</option>
					<option>Any Other District Within India</option>
					</select>
				</td>
			</tr>
			<tr>
			<td><font color="white"><b>State</font></td>
			<td><select name="State">
					<option>--Select--</option>
					<option>Maharashtra</option>
					<option>Andhra pradesh</option>
					<option>West Bengal</option>
					<option>Any Other State Within India</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><font color="white"><b>Enter E-mail.ID</font></td>
				<td><input type="E-mail" name="E_mail" placeholder="Enter E-mail.ID" title="E_mail"></td>
			</tr>
			<tr>
				<td><font color="white"><b>Check-In Date</font></td>
				<td><input type="Date" name="Check_In" value="<?php echo $ci; ?>" title="Check_In"></td>
				<td><font color="white"><b>Check-Out Date</font></td>
				<td><input type="Date" name="Check_Out" value="<?php echo $co; ?>" title="Check_Out"></td>
			</tr>
			<tr>
			<td><font color="white"><b>Airport Transfer</font></td>
			<td><select name="airport">
					<option>--Select--</option>
					<option>10:00 AM</option>
					<option>11:00 AM</option>
					<option>12:00 PM</option>
					<option>1:00 PM</option>
					<option>2:00 PM</option>
					<option>3:00 PM</option>
					<option>4:00 PM</option>
					<option>5:00 PM</option>
					<option>6:00 PM</option>
					<option>7:00 PM</option>
					<option>8:00 PM</option>
					<option>9:00 PM</option>
					<option>10:00 PM</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><font color="white"><b>Enter Members</td>
				<td><input type="text" name="Members" placeholder="Enter Members" title="Members"></td>
			</tr>
			<td>
				<td><input style="width: 160px;height: 50px;border-radius: 15px;" type="submit" name="submit" value="Submit Form"></td>
			</td>
			<td>
				<td><input style="width: 200px;height: 50px;border-radius: 15px;" type="submit" formaction="sroom.php" name="submit" value="View Room Price & Availability"></td>
			</td>

         <?php }
         else
         {
         	?>
              	<tr>
				<td><font color="white"><b>Status</td>
			    <td><input type="text" name="Status" value="Not-Available" disabled="disabled" title="Status"></td>
			</tr>
         	<?php
          }

            ?>
			
		</table>
	</form>
	<?php
	  if (isset($_POST['submit'])) 
	  {
	  	$name=$_POST['name'];
	  	$idno=$_POST['idno'];
	  	$Address=$_POST['Address'];
	  	$City=$_POST['City'];
	  	$District=$_POST['District'];
	  	$State=$_POST['State'];
	  	$E_mail=$_POST['E_mail'];
	  	$Check_In=$_POST['Check_In'];
	  	$Check_Out=$_POST['Check_Out'];
	  	$airport=$_POST['airport'];
	  	$Members=$_POST['Members'];
	  	$Destination=$_POST['Destination'];



	  	if (mysqli_query($a,"insert into form(name,Destination,id_no,address,city,district,state,email,cidate,codate,pickup,member) value('$name','$Destination','$idno','$Address','$City','$District','$State','$E_mail','$Check_In','$Check_Out','$airport','$Members')"))
	  	{
	  		mysqli_query($b,"update room set status='Book' where room_no=$rno");
	  	}
	  	else
	  	{
	  		echo "Data Not Inserted";
	  	}
	  	
	  }
	?>
	</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>