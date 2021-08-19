<?php
if (isset($_POST['login'])){
	$mail=$_POST['mail'];
	$pwd=$_POST['pwd'];

	include 'dbconnect.php';

	$sql="SELECT * FROM admin WHERE email='$mail' AND pwd='$pwd'";

	$qry=mysqli_query($con,$sql);
	if (!$qry)
		{echo mysqli_error($con);}
	$count=mysqli_num_rows($qry);
	if($count==1){
					$bag=mysqli_fetch_array($qry);
					$_SESSION['admin']=$bag;
					echo "login Success";
					header("Refresh:3,url=index.php");

	}else{
		echo "Incorrect Email Or Password";
		}

	}else{
		echo " Login Button Not clicked";
	}
	?>