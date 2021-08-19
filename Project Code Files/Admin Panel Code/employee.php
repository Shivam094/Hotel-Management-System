<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHITE STAR GROUPS co.Ltd</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="img/Logo.png" type="img/icon" rel="icon">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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
				<li><a href="record.php">RECORD</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</div>
		<center><div id="form">
			<form action="employee.php" method="post">
		<center><table>
			
			<tr>
				<td><font color="white">Name</font></td>
				<td><input type="text" name="name" placeholder="Name" title="Enter Room No"></td>
			</tr>
			<tr>
				<td><font color="white">Designation</font></td>
				<td><input type="text" name="designation" placeholder="Designation" title="Enter Room Type"></td>
			</tr>
			<tr>
				<td><font color="white">Salary</font></td>
				<td><input type="text" name="salary" placeholder="Salary" title="Enter Room Price"></td>
			</tr>
			<tr>
				<td><font color="white">Dob</font></td>
				<td width="20%" height="50px"><center><input type="Date" name="dob" required></center></td>
			</tr>
			<tr>
				<td><font color="white">Doj</font></td>
				<td width="20%" height="50px"><center><input type="Date" name="doj" required></center></td>
			</tr>
			<tr>
			<td><font color="white">Gender</font></td>
			<td>
				<input type="radio" name="gender" value="male" id="Male"><font color="white"> Male</font>
				<input type="radio" name="gender" value="female" id="Female"><font color="white"> Female</font>
			</td>
		</tr>
			<tr>
				<td><font color="white">Phone.No</font></td>
				<td><input type="text" name="phone" placeholder="Contact.No" title="Enter Room Price"></td>
			</tr>
			<tr>
				<td><font color="white">Email</font></td>
				<td><input type="text" name="email" placeholder="Email ID" title="Enter Room Price"></td>
			</tr>
			<td>
				<td><input class="btn btn-primary" type="submit" name="Submit" value="Add Employee"></td>
			</td>
		</table>
	</form>
	<?php
	  if(isset($_POST['Submit']))
	  {
	  	$name=$_POST['name'];
	  	$designation=$_POST['designation'];
	  	$salary=$_POST['salary'];
	  	$dob=$_POST['dob'];
	  	$doj=$_POST['doj'];
	  	$gender=$_POST['gender'];
	  	$phone=$_POST['phone'];
	  	$email=$_POST['email'];
	  	if(mysqli_query($c,"insert into record(name,designation,salary,dob,doj,gender,phone,email) value('$name','$designation','$salary','$dob','$doj','$gender','$phone','$email')"))
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