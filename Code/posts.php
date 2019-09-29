<?php
$con=mysqli_connect("localhost","root","","helps");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}
$sql="insert into posts(name,email,sub,msg)values('".$_POST['name']."','".$_POST['email']."','".$_POST['sub']."','".$_POST['msg']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Thank You for Your Feedback!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}

?>