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
	<h1> Welcome  <?php echo  $_SESSION['username']; ?> </h1>
	<center><a href="index.php"><b><i class="fa fa-home"></i><font size="4">HOME</font></a></center>
</div>
</div>
</div>
</body>
</html>