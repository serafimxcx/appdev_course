<?php

include("connect.php");

$query = "select * from tbl_employees where employee_id=".$_REQUEST["employee_id"];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$employee_info = "";

if ( $row = mysqli_fetch_assoc($result) ) {
	
	$employee_info = '{';
	$employee_info .= '"employee_number":"'.$row["employee_number"].'",';
	$employee_info .= '"last_name":"'.$row["last_name"].'",';
	$employee_info .= '"first_name":"'.$row["first_name"].'",';
	$employee_info .= '"middle_name":"'.$row["middle_name"].'",';
	$employee_info .= '"monthly_salary":"'.$row["monthly_salary"].'",';
	$employee_info .= '"birth_date":"'.date("Y-m-d",strtotime($row["birth_date"])).'"';
	
	$employee_info .= '}';
	
} 



echo $employee_info;

?>
