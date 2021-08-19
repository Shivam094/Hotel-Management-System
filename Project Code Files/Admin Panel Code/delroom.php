
<?php

include "connection.php"; // Using database connection file here

 // get id through query string

$del = mysqli_query($a,"delete from room where id = (select max(id) from room)"); // delete query

if($del)
{
    mysqli_close($a); // Close connection
    header("location:roomdetails.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>