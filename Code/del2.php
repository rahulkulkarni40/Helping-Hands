<?php
$con=mysqli_connect('localhost','root','','helps');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}

if(isset($_GET['idd']))
{
	$sql ="DELETE FROM userinfo WHERE email='".$_GET['idd']."'";
	$result=mysqli_query($con,$sql);
	echo'<script type="text/javascript">';
	echo'alert("volunteer has been deleted")';
	echo'</script>';
	echo'<script>window.location="add.html"</script>';	
}
