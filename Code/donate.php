<?php
$con=mysqli_connect("localhost","root","","helps");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}

	$sql="insert into donate(firstname,lastname,donate,city,state,address,contact,email,zip)values('".$_POST['fn']."','".$_POST['ln']."','".$_POST['donate']."','".$_POST['city']."','".$_POST['state']."','".$_POST['add']."','".$_POST['con']."','".$_POST['email']."','".$_POST['zip']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
	mysqli_close($con);
?>