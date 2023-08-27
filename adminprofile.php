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
    <title>admin profile</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:80px;
            

        }

        .sub_container {
            background-color: white;
            padding: 50px;
            padding-top: 10px;
           

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
        .end-link{
            margin: 3px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <tbody>
        
        
        <div class="container">
            <div class="sub_container">
                <div>
                    <div class="image-container"><img class="image" src="New folder/heart-1776746_1280.jpg"> </div>
                </div>
                <p class="text"> your profile</p>
                <div class="data">
                    <p class="pp"><b>unique key=</b></p>
                    <?php echo $admin_data["id"]; ?>
                </div>
               
                <div class="data">
                    <p class="pp"><b>email=</b></p>
                    <?php echo $admin_data["email"]; ?>
                </div>
                <div class="data">
                    <p class="pp"><b>name=</b></p>
                    <?php echo $admin_data["user_name"]; ?>
                </div>
                <div class="data">
                    <p class="pp"><b>password=</b></p>
                    <?php echo $admin_data["password"]; ?>
                </div>
                
            </div>

        </div>
        <p class="end-text"> <a class="end-link" href="adminedit.php?id=<?php echo $admin_data["id"]; ?>">Edit</a>
<a class="end-link" href="admindelete.php?id=<?php echo $admin_data["id"]; ?>">Delete</a>
<a class="end-link" href="adminlogout.php">Logout</a>
<a class="end-link" href="adminsignup.php">add admin</a></p>
        </P>
       
       

       
    </tbody>
    </table>
    </div>
    <div class="header">

<div class="left"><a href="adminindex.php"><img class="logo" src="New folder/strawhat.jpg"></a>
    <p class="logo1">totally legal books</p>
</div>
<div class="right">

    
    </div>



</div>
</div>

</body>

</html>