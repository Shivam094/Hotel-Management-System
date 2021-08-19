<?php
if (isset($_POST['login'])){
	$mail=$_POST['mail'];
	$pwd=$_POST['pwd'];

	include 'dbconnect.php';

	$sql="select * from users where email='$mail' && pwd='$pwd' ";

	$qry=mysqli_query($con,$sql);
	$count=mysqli_num_rows($qry);
	if($count==1){
					$bag=mysqli_fetch_array($qry);
					$_SESSION['user']=$bag;
					echo "login Success";
					header("Refresh: 2,url=bindex.php");
	}
	else{
		echo "Invalid Email or Password";
		}

	}
	else{
		echo " Login Button Not clicked";
	}
	?>