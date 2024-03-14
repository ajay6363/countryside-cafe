<?php
require("connection.php");
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$phoneno=$_REQUEST["phoneno"];
$gender=$_REQUEST["Male"];
$file=$_FILES["file"]["name"];
$res=$con->query("insert into tb_employee(`name`,`age`,`phoneno`,`gender`,`file`)values('$name','$age','$phoneno','$gender','$file')");
$count=mysqli_affected_rows($con);
move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$file);
header("location:dashboard.php");
?>