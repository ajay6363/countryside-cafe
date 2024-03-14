<?php
require("connection.php");
$res=$con->query("select * from `tb_employee`");
$count=$res->num_rows; 
if(isset($_GET['id']))
{
$file="images/".$_GET['id'];
if(file_exists($file))
{
header('Content-Description: File Transfer'); 
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($file)); 
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate'); 
header('Pragma:public');
header('Content-Length:'. filesize($file));
ob_clean();
flush();
readfile($file);
exit;
}
} 
?>