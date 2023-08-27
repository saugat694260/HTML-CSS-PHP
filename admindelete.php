
<?php
include("connection.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM admin WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

header("Location: adminlogin.php"); 

exit();
?>