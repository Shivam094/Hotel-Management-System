
<?php

include "connection.php"; // Using database connection file here

 // get id through query string

$del = mysqli_query($d,"delete from cancel where id = (select max(id) from cancel)"); // delete query

if($del)
{
    mysqli_close($a); // Close connection
    header("location:notification.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>