<?php include "db_conn.php"; 
$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE from images where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:alter.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>