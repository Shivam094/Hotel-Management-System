<?php
 session_start();
 header('location:login.php');

 $con=mysqli_connect('localhost','root','');

 mysqli_select_db($con,'adminregistration');

 $name=$_POST['user'];
 $pass=$_POST['Password'];

 $s="select * from admintable where name= '$name' ";

 $result=mysqli_query($con,$s);

 $num=mysqli_num_rows($result);

 if($num==1)
 {
 	echo "Username Already Taken.";
 }
 else
 {
 	$reg="insert into admintable (name,password) values ('$name', '$pass')";
 	mysqli_query($con,$reg);
 	echo "Registration Successful";
 }
?>