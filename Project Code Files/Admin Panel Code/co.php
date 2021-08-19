<?php
include("connection.php");
$rno=$_GET['rno'];
if(mysqli_query($a,"update room set status='Un Book' where room_no=$rno"))
{
	header("Location:roomdetails.php");
}
?>
