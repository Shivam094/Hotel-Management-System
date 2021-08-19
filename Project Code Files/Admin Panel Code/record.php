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
				<li><a href="login.php">LOGOUT</a></li>
			</ul>
		</div>
		<table>
		<tr>
			<th width="10%" height="50px"><font color="white">Name</th>
			<th width="10%" height="50px"><font color="white">Designation</th>
			<th width="10%" height="50px"><font color="white">Salary</th>
			<th width="10%" height="50px"><font color="white">Dob</th>
			<th width="10%" height="50px"><font color="white">Doj</th>
			<th width="10%" height="50px"><font color="white">Gender</th>
			<th width="10%" height="50px"><font color="white">Phone.No</th>
			<th width="10%" height="50px"><font color="white">Email ID</th>
		</tr>
		<?php
          $q1="select * from record";
          $run=mysqli_query($c,$q1);
          while($row=mysqli_fetch_array($run))
          {
          	$name=$row['name'];
            $designation=$row['designation'];
            $salary=$row['salary'];
            $dob=$row['dob'];
            $doj=$row['doj'];
            $gender=$row['gender'];
            $phone=$row['phone'];
            $email=$row['email'];
           ?>

       
		<tr>
			<td width="10%" height="50px"><center><font color="white"><?php echo $name; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $designation; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $salary; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $dob; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $doj; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $gender; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $phone; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $email; ?></center></td>
		</tr>
		<?php
		   }
		?>
	</table>

	<center>
<table>

	<form action="record.php" method="get">
			
			<tr>
				<td><input type="text" name="name" placeholder="Enter Employee Name" title="employee"></td>
			
				<td><input class="btn btn-primary" type="submit" name="Submit" value="Delete Employee ▲"></td>
			</tr>
			
	</form>

<!--
		<td>
				<td><a style="color:red;" href="del.php">Delete Employee Record ⚠️</a></td>
	</td>
-->

</table>
</center>
<?php
	  if(isset($_GET['Submit']))
	  {
	  	$name=$_GET['name'];
	  	$del = mysqli_query($c,"delete from record where name='$name'"); // delete query

if($del)
{
    mysqli_close($c); // Close connection
    header("location:record.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
	  	}
?>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>