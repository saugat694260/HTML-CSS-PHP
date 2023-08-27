<?php
include("connection.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

header("Location: adminindex.php"); 

exit();
?>