<?php

function check_adminlogin($con)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from admin where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$admin_data = mysqli_fetch_assoc($result);
			return $admin_data;
		}
	}

	//redirect to login
	header("Location: adminlogin.php");
	die;

}




