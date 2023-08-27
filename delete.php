
<?php
include("connection.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));

header("Location: signup.php"); 

exit();
?>