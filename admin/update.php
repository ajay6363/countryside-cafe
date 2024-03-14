<?php
require("connection.php");
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$phoneno=$_REQUEST["phoneno"];
$gender=$_REQUEST["gender"];
$file=$_FILES["file"]["name"];
$id=$_REQUEST["id"];
if(empty($_FILES["file"]["name"]))
{
$res=$con->query("update tb_employee set `name`='$name',`age`='$age',`phoneno`='$phoneno',`gender`='$gender' where employee_id='$id'");
$count=mysqli_affected_rows($con);
}
else
{
$file=$_FILES["file"]["name"];	
$res=$con->query("update tb_employee set `name`='$name',`age`='$age',`phoneno`='$phoneno',`gender`='$gender',`file`='$file' where employee_id='$id'");
move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$file);
}
header("location:table.php");
?>