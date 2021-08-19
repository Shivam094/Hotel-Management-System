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
</head>
<body>
		<div style="background-image: url('img/break.jpg'); width: 100%;height: 800px;">
				<center><a href="index.php"><font color="black" size="3"><b>-</b></font></a></center>
	<h1><font color="black" size="10"><b> Welcome  admin</b></font></h1>
	<center><a href="index.php"><font color="red" size="5"><b><i class="fa fa-home"></i> HOME</b></font></a></center>
</div>
</div>
</body>
</html>