<?php
session_start();
require("connection.php");
$email=$_REQUEST["email"];
$password=$_REQUEST["psw"];
$res=$con->query("select * from `tb_userlogin` where `email`='$email' AND `password`='$password'");
$count=$res->num_rows;
if($count>0)
{

$_SESSION["aaa"]=$email;	
header("location:dashboard.php");
}
else
{	
echo "<script> alert('please enter the correct email and password');window.location='customerlogin.php';</script>";
}
?>