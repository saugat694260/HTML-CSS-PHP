<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "web_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
//$dbcon = mysqli_connect('localhost','root','password','web_db') or die('Could not connect to MySQL: ' .mysqli_connect_error()); 
{

	die("failed to connect!");
}
?>