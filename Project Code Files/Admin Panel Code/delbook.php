
<?php

include "connection.php"; // Using database connection file here

$del = mysqli_query($b,"delete from form where id = (select max(id) from form)"); // delete query

if($del)
{
    mysqli_close($b); // Close connection
    header("location:booking.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>