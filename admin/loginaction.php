
<?php
session_start();
require("connection.php");
$u=$_REQUEST["un"];
$pass=$_REQUEST["psw"];
$res=$con->query("select * from `tb_login` where `email`='$u' AND `password`='$pass'");
$count=$res->num_rows;
if($count>0)
{
$_SESSION["aaa"]=$u;	
header("location:dashboard.php");
}
else
{	
echo "<script> alert('please enter the correct email and password');window.location='index.php';</script>";
}
?>