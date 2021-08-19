
<?php

include "connection.php"; // Using database connection file here


 // get id through query string

$del = mysqli_query($c,"delete from record where id = (select max(id) from record)"); // delete query

if($del)
{
    mysqli_close($c); // Close connection
    header("location:record.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>