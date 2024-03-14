<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$res=$con->query("insert into tb_userlogin(`name`,`email`,`password`)values('$name','$email','$password')");
$count=mysqli_affected_rows($con);
header("location:dashboard.php");
?>