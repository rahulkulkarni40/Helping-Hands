<?php
session_start();

$con=mysqli_connect('localhost','root','','helps');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM posts ";
$result=mysqli_query($con,$sql);
echo"<html>";
echo"<body <body background='images/img19.jpg'>><center>";
echo"<table border='1' cellspacing='0' cellpadding='5'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:orange;};';
echo'</script>';
echo"<th><p>Id</th><th><center>Name.</center></th><th>Email</th><th>Subject</th><th>Comments</th></p>";
	while($row = mysqli_fetch_array($result))

	{
		$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$sub=$row['sub'];
	$msg=$row['msg'];
	
		echo"</tr><tr><td><p><center>".$id."</center></p></td><td>".$name."</td><td>".$email."</td><td>".$sub."</td><td>".$msg."</td><td><a href='del1.php?idd=".$id."' style='color:red;'>Delete</a></td> ";
	
	
	} echo"</tr>";
		 echo"</table>";
		 echo"<form action='add.html'>";
			echo"<input type='submit' value='Back'>";
			 echo"</form></center></body></html>";
?>