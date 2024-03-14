<?php
require("connection.php");
//Excel file name for download 
$fileName = "employees list" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('employee_id', 'name', 'age', 'phoneno','gender','file'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM tb_employee"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
         
        $lineData = array($row['employee_id'], $row['name'], $row['age'], $row['phoneno'], $row['gender'],$row['file']); 
         
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
	} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 exit;