<?php
session_start();
$pass1=$_POST['password'];
$pass2=$_POST['password1'];

if($pass1 == $pass2)
{
$con=mysqli_connect('localhost','root','','helps');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update userinfo set Password='$_POST[password]',mobile='$_POST[fid]' where email='".$_POST['email']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Account has been successfully Changed")';
	echo'</script>';
	echo'<script>window.location="vol.html"</script>';
}
	else
	{
	
	echo'<script type="text/javascript">';
	echo'alert("please enter same password")';
	echo'</script>';
	echo'<script>window.location="changes.php"</script>';
	}

?>