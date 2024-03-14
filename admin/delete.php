<?php
require("connection.php");
$id=$_REQUEST["id"];
$res=$con->query("delete from tb_employee where `employee_id`='$id'");
$count=$res->num_row;
if($count>0)
	$row=$res->fetch_assoc();
$upload=$row=["images"];
unlink("file/$upload");
$res=$con->query("delete from tb_employee where `employee_id`='$id'");
$count=mysqli_affected_rows($con);
if($count>0)
{
header("location:table.php");
}
else
{
header("location:table.php");
}	
?>