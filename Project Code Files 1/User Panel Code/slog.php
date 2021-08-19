<?php
  
  session_start();
  if(!isset($_SESSION['username'])){
  	header('location:login.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link href="img/Logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div class="menu-bar">
		<div style="background-image: url('img/c.jpg'); width: 100%;height: 790px;">
				<center><a href="index.php"><b><i></i><font color="black">-</font></a></center>
	<h1> You are logged out from your account <?php echo  $_SESSION['username']; ?> !</h1>
	<center>
	<table>
	   <tr>
	<td><a href="index.php"><b><i class="fa fa-home"></i><font size="4">Home</font></a></td>
	<td><a href="login.php"><b><i class="fas fa-sign-in-alt"> </i><font size="4">  Login Now..</font></a></td>
		</tr>
	</table>
	</center>
</div>
</div>
</div>
</body>
</html>