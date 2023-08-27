<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    
	

?>

<!DOCTYPE html>
<html style="background-color:lightgreen;">

<head>
    <title>dashboard</title>
    <style>
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
        .logo2{
            height: 40px;
            width: 40px;
            display: inline-block;
            margin-left: 40px;
           
            margin-top:3px;
            border-radius: 80px;
            
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

        .login1 {
            height: 100%;
            width: 100%;
            cursor: pointer;
        }



        .sub {
            display: flex;



            top: 50px;


            align-items: center;

            justify-content: center;
            align-items: center;
            margin-top: 60px;
            color: #4f5153;



        }

        .a {
            border-radius: 8px;

            padding: 10px;
            padding-left: 30px;
            padding-right: 30px;
            background-color: white;
            margin: 3px;

        }

        .a:hover {
            cursor: pointer;
        }

        .slider1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
        }



        .slider {


            width: 300px;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-style: solid;
            border-color: black;
            border-width: 2px;

        }





        .aa {

            width: 200px;
            display: inline-block;
            height: 250px;
            vertical-align: top;

            background-color: #d1d7e2;
            ;
        }

        .bb {

            width: 200px;
            display: inline-block;
            height: 250px;
        }

        .bb .image {
            width: 100%;
            height: 100%;
        }

        .image1 {
            width: 100%;
            height: 100%;


        }

        .product {
            width: 280px;
            height: 350px;
            background-color: blueviolet;
            display: flex;
            justify-content: center;
            position: relative;

        }

        .books {
            width: 270px;
            height: 340px;

        }

        .image {
            width: 100%;
            height: 100%px;


        }


        .book_image {
            display: flex;
            justify-content: center;

            width: 270px;
            height: 250px;

        }

        .book_name {
            margin: 2px;
            width: 270px;
        }

        .author {
            width: 270px;
        }

        .genre {
            display: inline-block;
            width: 125px;
        }

        .status {
            display: inline-block;
            width: 125px;
        }

        .price {

            position: absolute;
            padding-left: 9px;
            padding-right: 9px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
            font-size: 12px;
            top: 2px;
            right: 5px;

            cursor: pointer;
            background-color: #4f5153;


        }

        .product {
            width: 300px;
            height: 380px;
            background-color: white;
            display: flex;
            justify-content: center;
            position: relative;
            display: inline-block;
            margin: 70px;
            cursor: pointer;
            transition: width 2s, height 2s;

        }

        .product:hover {
            background-color: rgba(255, 255, 255, 0.904);




        }

        .books {
            width: 270px;
            height: 340px;
            margin-left: 16px;




        }

        .image {
            width: 100%;
            height: 100%px;


        }


        .book_image {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            width: 270px;
            height: 200px;



        }

        .book_name {
            margin-top: 1px;
            width: 270px;
        }

        .author {
            margin-top: 1px;
            width: 270px;
        }

        .genre {
            margin-top: 1px;
            display: inline-block;
            width: 125px;
        }

        .status {
            margin-top: 1px;
            display: inline-block;
            width: 125px;
        }

        .price {

            position: absolute;
            padding-left: 9px;
            padding-right: 9px;
            padding-top: 5px;
            padding-bottom: 5px;

            font-size: 12px;
            top: 10px;
            right: 14px;

            cursor: pointer;
            background-color: #90EE90;


        }

        .end-text {
            text-align: center;
            margin-top: 18px;

        }

        .link {
            margin: 4px;
        }
    </style>



</head>

<body>



    </div>

    <div class="sub">
        <div class="a"><a href="" style="text-decoration: none;color: black;">donate</a></div>



    </div>
    <p style="text-align: center;font-size: 20px;">welcome
        <?php echo $user_data['user_name']; ?>!!<br>checkout these banger books
    </p>
    <p style="background-color: rgba(11, 173, 38, 0.973);color: white;">AVAILABLE BOOKS</p>




    </div>
    <?php
$count=1;
$sel_query="Select * from product ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>








    <div class="product">

        <div class="price">
            <?php echo $row["price"]; ?>
        </div>


        <div class="books">
            <div class="book_image"><img class="image" src="New folder/heart-1776746_1280.jpg"></div>

            <div class="book_name">
                <p style="text-align: center;">
                    <?php echo $row["product_name"]; ?>
                </P>

            </div>
            <div class="author">author:
                <?php echo $row["owner"]; ?>
                </P>
            </div>
            <div>
                <p class="genre">genre:
                    <?php echo $row["genre"]; ?>
                </p>
                <p class="status">status:
                    <?php echo $row["status"]; ?>
                </p>
            </div>
            <p style="text-align: center;"> add to wishlist
                <input type="checkbox">
            </p>

        </div>
    </div>


    </div>











    <?php $count++; } ?>
    <div class="header">

        <div class="left"><a href="index.php"><img class="logo" src="New folder/strawhat.jpg"></a>
            <p class="logo1">totally legal books</p>
        </div>
        <div class="right">

            <div class="login"><a href="profile.php"><img class="logo2" src="New folder/heart-1776746_1280.jpg"></a>
            </div>



        </div>
    </div>











</body>

</html>