<?php
$uid=$_GET['id'];

$acc="ACC".rand();
$balance=20000;
$date=date('d/m/Y');
$status=1;
include 'dbconnect.php';	
$sql="INSERT INTO accounts VALUES('0','$uid','$acc','$balance','$date','$status')";
$qry=mysqli_query($con,$sql);

header("location: view_user.php");
?>
