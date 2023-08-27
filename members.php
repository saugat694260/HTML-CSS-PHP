
<?php 
session_start();

	include("connection.php");
	include("adminfunction.php");

	$admin_data = check_adminlogin($con);
    
	

?>


<!DOCTYPE html>
<html lang="en" style="background-color: lightgreen;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .logo1 {
            display: inline-block;
            align-items: center;
            vertical-align: top;

        }

        .logo1:hover {
            cursor: default;
        }
        .container {
            justify-content: space-between;
            width: 400px;
            display: inline-block;
            margin: 20px;
margin-top:80px;
            
            
          
            

        }

        .sub_container {
            background-color: white;
            padding: 50px;
            padding-top: 10px;
            border-radius: 10px;
            
            
           

        }
        .container :hover{
            background-color: rgba(255, 255, 255, 0.788);
            width: 405;
            
        }

        .image {
            border-radius: 120px;
            width: 80px;
            height: 80px;


        }

        .image-container {
            display: flex;
            justify-content: center;

        }

        .data {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
            margin-bottom: 10px;
            border-color: black;
            border-style: solid;
            border-width: 0px 0px 1px 0px;


        }

        .text {
            text-align: center;
            font-size: 20px;
        }

        .pp {
            margin-right: 5px;
            align-items: start;

        }

        .end-text {
            text-align: center;
            margin: 10px;
        }
    </style>
</head>

<body>

    <tbody>
        <?php
        $count=1;
        $sel_query="Select * from users ;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="container">
            <div class="sub_container">
                <div>
                    <div class="image-container"><img class="image" src="New folder/heart-1776746_1280.jpg"> </div>
                </div>
                <p class="text"> profile <?php echo $count; ?></p>
                
                <div class="data">
                    <p class="pp"><b>user number=</b></p>
                    <?php echo $row["id"]; ?>
                </div>
                
                <div class="data">
                    <p class="pp"><b>name=</b></p>
                    <?php echo $row["user_name"]; ?>
                </div>
                <div class="data">
                    <p class="pp"><b>password=</b></p>
                    <?php echo $row["password"]; ?>
                </div>
               
                <div class="data">
                    <p class="pp"><b>joined since date=</b></p>
                    <?php echo $row["date"]; ?>
                </div>
                <p class="end-text"> <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row["id"]; ?>">remove user</a>
            </div>
            

        </div>
        
      
      

        <?php $count++; } ?>
    </tbody>
    </table>
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