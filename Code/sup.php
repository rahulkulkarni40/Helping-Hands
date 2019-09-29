<?php
$con=mysqli_connect("localhost","root","","helps");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}

$passs1 = $_POST['password'];
$passs2 = $_POST['pwd'];


if($passs1==$passs2 )
{
	$sql="insert into userinfo (user_name,password,mobile,email,gender,dob)values('".$_POST['use']."','".$_POST['password']."','".$_POST['ph']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['dob']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'thanks.html';</script>";
	}
}

else
{
	print "<script type=\"text/javascript\">"; 
	print "alert('The both passwords you have entered do not match!! ')"; 
	print "</script>"; 
	echo '<script>history.go(-1); </script>';
	
}
mysqli_close($con);
?>