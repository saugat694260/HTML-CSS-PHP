<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        

		if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into users (user_id,email,user_name,password) values ('$user_id','$email','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html style="display: flex;
justify-content: center;
align-items: center;
background-color: lightgreen;">

<head>
    <title>Signup</title>
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
        .password-section,
        .name-section,
        .password-section2 {
            margin-bottom: 6px;


        }

        .login-button {
            margin-left: 55px;


        }



        .end-text {
            text-align: center;

        }

        .end-text :hover {
            cursor: pointer;

        }


        

        .text1 {
            text-decoration: none;
        }

        .input {
            border: none;

            outline: none;
            background-color: aliceblue;

        }

        .input:focus {
            border-color: black;
            border-style: solid;
            border-width: 0px 0px 2px 0px;
        }
    </style>


    <div class=" container">


        <form method="post" class="sub-container">
        <p style="  text-align: center;"><b style="font-size: 20px;">signup</b></p>
            <div class="email-section">
                <input class="input" type="email" name="email" placeholder="Enter email">
            </div>

            <div class="name-section">
                <input class="input" type="text" name="user_name" placeholder="Enter name">
            </div>
            <div class="password-section">
                <input class="input" type="password" name="password" placeholder="Enter password">
            </div>

            <div class="login-button"><input type="submit" value="Signup"></div>
    </div>

    <p class="end-text">have an account?<a href="login.php" >
            <span style="text-decoration: underline;">Login</span></a></p>
    </form>

</body>

</html>