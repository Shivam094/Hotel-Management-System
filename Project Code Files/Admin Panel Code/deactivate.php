<?php

include 'dbconnect.php';
$id=$_GET['id'];
$sql="UPDATE accounts SET status='0' WHERE user_id='$id'";
$qry=mysqli_query($con,$sql);
header("location: view_user.php");


?>