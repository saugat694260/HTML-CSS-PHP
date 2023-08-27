


<?php
session_start();
include("connection.php");
include("adminfunction.php");
$admin_data = check_adminlogin($con);

	

$id=$_REQUEST['id'];
$query = "SELECT * from admin where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html style="background-color: lightgreen;">

<head>
    <meta charset="utf-8">
    <title>Update Record</title>
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
        .login{
            margin-right:10px;
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
        }

        .sub-container {
            background-color: white;
            margin-top: 90px;
            padding: 10px;
          


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
            background-color:  background-color: aliceblue;

        }

        .input:focus {
            border-color: black;
            border-style: solid;
            border-width: 0px 0px 1px 0px;
        }
    </style>
</head>

<body>

 
    <?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$email =$_REQUEST['email'];
$user_name =$_REQUEST['user_name'];
$password =$_REQUEST['password'];



$update="update admin set email='".$email."',user_name='".$user_name."',password='".$password."' where id='".$id."'";
// echo "$update";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='adminprofile.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>



    <div class=" container">

        <form name="form" method="post" action="" class="sub-container">
            <p style="  text-align: center;"><b style="font-size: 20px;">edit your profile</b></p>
            <input type="hidden" name="new" value="1" />
            <input name="id" type="hidden" value="<?php echo $row['id'];?>" />

            <div class="email-section">


                <input class="input" type="email" name="email" placeholder="Enter email" required
                    value="<?php echo $row['email'];?>" />
            </div>
            <div class="password-section">
                <input class="input" type="text" name="user_name" placeholder="Enter name" required
                    value="<?php echo $row['user_name'];?>" />
            </div>
            <div class="password-section">
                <input class="input" type="password" name="password" placeholder="Enter password" required
                    value="<?php echo $row['password'];?>" />
            </div>

            <div class="login-button"><input name="submit" type="submit" value="Update" /></div>
    </div>



    <div class="header">

<div class="left"><a href="adminindex.php"><img class="logo" src="New folder/strawhat.jpg"></a>
    <p class="logo1">totally legal books</p>
</div>
<div class="right">

    <div class="login"><a href="adminprofile.php"><img class="logo" src="New folder/download.jpg"></a>
    </div>

    </form>
    <?php } ?>
  

</body>

</html>