<?php
require("connection.php");
$name=$_REQUEST["name"];
$discription=$_REQUEST["discription"];
$file=$_FILES["file"]["name"];
$price=$_REQUEST["price"];
$disc=$_REQUEST["disc"];
$res=$con->query("insert into tb_addcoffee(`coffeename`,`discription`,`coffeeimage`,`price`,`discount`)values('$name','$discription','$file','$price','$disc')");
$count=mysqli_affected_rows($con);
move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$file);
header("location:main-page.html");
?>