
<?php 
session_start();


	include("connection.php");
	include("adminfunction.php");
 

	$admin_data = check_adminlogin($con);
    
	


  


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        

		if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
		{

			

			$query = "insert into admin (email,user_name,password) values ('$email','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: adminlogin.php");
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
         .header {
            display: flex;
            justify-content: space-between;
            position: fixed;
            left: 0;
            right: 0;
            height: 50px;
            background-color: white;

            top: 0;



            border-color: rgba(0, 0, 0, 0.521);
            border-style: solid;
            border-width: 0px 0px 2px 0px;


        }


        .logo {
            height: 40px;
            width: 40px;
            display: inline-block;
            margin-left: 40px;
            border-radius: 80px;
            margin-top:3px;


        }

        .logo1 {
            display: inline-block;
            align-items: center;
            vertical-align: top;

        }

        .logo1:hover {
            cursor: default;
        }


        .login {
            width: 50px;
            height: 50px;
            margin-right: 60px;
            cursor: pointer;
        }
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
            <p>add admin</p>
            <div class="email-section">
                <input class="input" type="email" name="email" placeholder="Enter email">
            </div>

            <div class="name-section">
                <input class="input" type="text" name="user_name" placeholder="Enter name">
            </div>
            <div class="password-section">
                <input class="input" type="password" name="password" placeholder="Enter password">
            </div>

            <div class="login-button"><input type="submit" value="add"></div>
    </div>

    <p class="end-text">have an account?<a href="login.php" >
            <span style="text-decoration: underline;">Login</span></a></p>
    </form>
    <div class="header">

        <div class="left"><a href="adminindex.php"><img class="logo" src="New folder/images.jpg"></a>
            <p class="logo1">totally legal books</p>
        </div>
        <div class="right">

            <div class="login"><a href="adminprofile.php"><img class="logo" src="New folder/heart-1776746_1280.jpg"></a>
            </div>



        </div>
    </div>

</body>

</html>