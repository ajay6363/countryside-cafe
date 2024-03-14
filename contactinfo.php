<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$message=$_REQUEST["msg"];
$res=$con->query("insert into tb_contactinfo(`name`,`email`,`message`)values('$name','$email','$message')");
$count=mysqli_affected_rows($con);
header("location:dashboard.php");
?>