<?php
include_once('connection.php');


		$sql ="SELECT * FROM latestupd ORDER BY upd_id Desc";


echo"<a href='vol.html'>Back</a>";
$result=mysql_query($sql);

echo"<hr>";
	while($row = mysql_fetch_array($result))

	{
		echo "<center><font color='red'><strong>Organization Name :</strong> ".$row['title']."<br/><br/>" ;
		echo "<strong>Contents :</strong> ".$row['content']."<br/><br/>" ;
		echo "<strong>Updated Date :</strong> ".$row['date']."<br/><br/>" ;
		echo "<strong>Picture:<br></strong><img src='latestUpdates/".$row['image']."' width='500' height='200'" ;
		echo "</font></center><hr><br>";
	}	
	
?>
