<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html style="display: flex;
justify-content: center;
align-items: center;
background-color: lightgreen">
<head>

</head>
<body>

	<style type="text/css">
	
	.container {
            
			background-color: white;
            margin-top: 90px;

        }

        .sub-container {
            padding: 20px;
            padding-top: 40px;
            padding-bottom: 30px;
        }

        .email-section,
        .password-section {
            margin-bottom: 6px;
        }

        .email-section,
        .password-section,
        .login-button {
            margin-bottom: 6px;
        }

        .login-button {
            margin-left: 60px;
            margin-top: 13px;
        }

        .end-text {
            text-align: center;
            margin-top: 50px;

        }

        .end-text :hover {
            cursor: pointer;
        }

        .span {
            text-decoration: underline;
        }


        .header-1 {
            text-align: center;
            width: 50px;
        }


        .input {
            border: none;
            outline: none;
			background-color: aliceblue;

        }

        .input:focus {
            border-color: black;
            border-style: solid;
            border-width: 0px 0px 1px 0px;
        }

	</style>

	<div class=" container">
	
		
		<form method="post" class="sub-container">
		<p style="  text-align: center;"><b style="font-size: 20px;">login</b></p>
		
		<div class="email-section">
			

			<input class="input" type="text" name="user_name"  placeholder="Enter your name"></div>
			<div class="password-section">
			<input class="input" type="password" name="password"  placeholder="Enter password">
</div>

			<div class="login-button"><input class="input" type="submit" value="Login"></div>
			</div>

			<p class="end-text">	dont have account?<a href="signup.php"><span style="text-decoration: underline;">Signup</span></a></P>
		</form>
	
</body>
</html>