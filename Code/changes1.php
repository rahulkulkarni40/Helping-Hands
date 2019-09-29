<?php
session_start();
//Store data into session 
$con=mysqli_connect('localhost','root','','helps');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM admin WHERE email='".$_SESSION['us']."'";



$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))

	{
echo"<html>";
echo"<body style='background-color:#ffff00'>";
echo"<head><style type='text/css'>";
echo"body {
	text-align:center;
	margin-left:400;
  width: 700px;
  height: 720px;
  align:center;
}";
echo"</style></head>";
echo"<link rel='stylesheet' href='fcreate_files/formoid1/formoid-default.css' type='text/css' />";
echo"<script type='text/javascript' src='fcreate_files/formoid1/jquery.min.js'></script>";
echo"<form action='fpass1.php' class='formoid-default' style='background-color:#ADD8E6;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;width:480px' title='My Formoid form' method='post'>";
echo"<div class='element-text' >";
echo"<h2 class='title'>Update Account</h2></div>";
echo"<div class='element-input' >";
echo"<label class='title'> FullName</label>";
echo"<input type='text' name='fn' readonly value='".$row['name']."'></div>";
echo"<div class='element-input' >";
echo"<input type='text' name='add' readonly value='".$row['address']."'></div>";
echo"<div class='element-input' >";
echo"<div class='element-input' >";
echo"<label class='title'>Email</label>";
echo"<input type='text' name='email' readonly value='".$row['email']."'></div>";
echo"<label class='title'>Contact</label>";
echo"<input type='text' name='fid'  value='".$row['ph']."'required></div>";
echo"<div class='element-password' >";
echo"<label class='title'>Password</label>";
echo"<input type='password' name='password' value='' required/></div>";
echo"<div class='element-password' >";
echo"<label class='title'>Confirm Password</label>";
echo"<input type='password' name='password1' value='' required/></div>";
echo"<div class='element-submit' >";
echo"<input type='submit' value='Submit'/></div>";
echo"</form>";
echo"<script type='text/javascript' src='fcreate_files/formoid1/formoid-default.js'></script>";
echo"<p class='frmd'><a href='http://formoid.com/'>Web 2 0 Forms Formoid.com 1.9</a></p>";
echo"</body>";
echo"</html>";
}


mysqli_close($con);
?>