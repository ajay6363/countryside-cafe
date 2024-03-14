<?php
session_start();
require("connection.php");
$name=$_REQUEST["name"];
$quantity=$_REQUEST["quantity"];
$cardnumber=$_FILES["cardnumber"];
$ccv=$_REQUEST["ccv"];
$price=$_REQUEST["price"];
$buyer=$_REQUEST["buyer"];
$res=$con->query("insert into tb_order(`coffeename`,`quantity`,`cardnumber`,`ccv`,`price`,`name`)values('$name','$quantity','$cardnumber','$ccv','$price','$name')");
$count=mysqli_affected_rows($con);
$insert=$_SESSION["ajay"]=$name;
header("location:index.php");
?>