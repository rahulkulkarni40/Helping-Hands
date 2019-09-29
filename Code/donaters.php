<?php
$con=mysqli_connect('localhost','root','','helps');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM donate";
$result=mysqli_query($con,$sql);
$limit = 1000000;
$count=0;
echo"<html>";
echo"<body <body background='images/img19.jpg'><center><form action='vol.html'>";
echo"<table border='1' cellspacing='0' cellpadding='4'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:orange;};';
echo'</script>';
echo"<th><p>Name<th>last name</th></th><th>Donated</th><th>Email Address</th><th>Phone no</th><th>Address</th></p>";
	while($row = mysqli_fetch_array($result))

	{
	$name1=$row['firstname'];
	$name2=$row['lastname'];
	$donate=$row['donate'];
	$em=$row['email'];
	$ad=$row['address'];
	$ph=$row['contact'];
	
			echo"</tr><tr><td><p>".$name1."</p></td><td>".$name2."</td><td>".$donate."</td><td>".$em."</td><td>".$ph."</td><td>".$ad."</td> ";
	}
	
		 echo"</tr>";
		 echo"</table>";

		 echo"<input type='submit' value='back'></form></center></body></html>";
?>