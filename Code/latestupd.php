<?php
include_once('connection.php');


if(@$_REQUEST['upd'])
{
	if($_POST['title']=="" || $_POST['cont']=="" )
	{
	$err= "fill the related data first";
	}
	
	else
	{
		$file=$_FILES['file']['name'];
		mysql_query("INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())");
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "latestUpdates/" . $_FILES["file"]["name"]);
		
	echo "<script>alert('updated successfully!');</script>";
		echo "<script>window.location = 'vol.html';</script>";
	}
	
}	
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Update - Formoid html forms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#00ffff"  background="images/img19.jpg" ">



<!-- Start Formoid form-->
<link rel="stylesheet" href="update_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="update_files/formoid1/jquery.min.js"></script><p class="back"><a href="vol.html">Back to Previous</a></p>
<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#00ffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Update</h2></div>
	
	<?php echo @$err; ?><div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="title" placeholder="Title"/><span class="icon-place"></span></div></div>
	<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="cont" cols="20" rows="5" placeholder="Description"></textarea><span class="icon-place"></span></div></div>
	<div class="element-file"><label class="title"></label><div class="item-cont"><label class="large" ><div class="button">Choose File</div><input type="file" class="file_input" name="file" id="file"/><div class="file_text">No file selected</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Submit" name="upd"/></div></form><script type="text/javascript" src="update_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
