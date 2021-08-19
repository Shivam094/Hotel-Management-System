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
		<center><p><font style="color:#AFA; font-size:250%;">Notification For Cancellation Request From User</font></p></center>
		<table>
		<tr>
			<th width="10%" height="50px"><font color="white">Name</th>
			<th width="10%" height="50px"><font color="white">Adhar.No</th>
		</tr>
		<?php
          $q1="select * from cancel";
         
          $run=mysqli_query($d,$q1);
          
          while($row=mysqli_fetch_array($run))
          {
          	$name=$row['name'];
            $id=$row['id_no'];
           ?>
            
       
		<tr>
			<td width="10%" height="50px"><center><font color="white"><?php echo $name; ?></center></td>
			<td width="10%" height="50px"><center><font color="white"><?php echo $id; ?></center></td>
   </tr>
		<?php
		    }
		?>
		<td>
	</table>
<center>
  <table>
	
	<tr>
				<td><a style="color:red;" href="delnot.php">Delete Notifications ⚠️</a></td>
				<td><a style="color:red;" href="index.php">Home 🏠</a></td>
	</tr>
		
  </table>
  </center>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>