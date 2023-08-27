<?php 
session_start();

	include("connection.php");
	include("adminfunction.php");
 

	$admin_data = check_adminlogin($con);
    
	




	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $product_name = $_POST['product_name'];
		$owner= $_POST['owner'];
		$genre = $_POST['genre'];
        $status = $_POST['status'];
        $price = $_POST['price'];
        

		if(!empty($product_name) && !empty($owner) && !empty($genre)&& !empty($status)&& !empty($price) && !is_numeric($owner))
		{

		
			$query = "insert into product ( product_name, owner ,genre,status,price) values ('$product_name','$owner ','$genre','$status','$price')";

			mysqli_query($con, $query);

			header("Location: adminindex.php");
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
        .container {
            background-color: white;




            margin-top: 90px;
            display: flex;
            align-items: center;


        }

        .sub-container {
            padding: 20px;

        }

        .email-section,
        .password-section,
        .name-section,
        .password-section2 {
            margin-bottom: 6px;


        }

        .login-button {
            margin-left: 60px;



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
        <p style="  text-align: center;"><b style="font-size: 20px;">add product</b></p>
            <div class="email-section">
                <input class="input" type="text" name="product_name" placeholder="product name">
            </div>

            <div class="name-section">
                <input class="input" type="text" name="owner" placeholder="author">
            </div>
            <div class="password-section">
                <input class="input" type="text" name="genre" placeholder="genre">
            </div>
            <div class="password-section">
                <input class="input" type="text" name="status" placeholder="status">
            </div>
            <div class="password-section">
                <input class="input" type="text" name="price" placeholder="price">
            </div>

            <div class="login-button"><input style="border: none;" type="submit" value="add"></div>
    </div>


    </form>
    </div>
    <div class="header">

<div class="left"><a href="adminindex.php"><img class="logo" src="New folder/strawhat.jpg"></a>
    <p class="logo1">totally legal books</p>
</div>
<div class="right">

    <div class="login"><a href="adminprofile.php"><img class="logo" src="New folder/download.jpg"></a>
    </div>



</div>
</div>

</body>

</html>