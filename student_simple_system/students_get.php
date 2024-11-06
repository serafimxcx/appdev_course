<?php

include("connect.php");

$query = "select * from tbl_students where id=".$_REQUEST["student_id"];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$getstudent = "";

if ( $row = mysqli_fetch_assoc($result) ) {
	
	$getstudent = '{';
	$getstudent .= '"studentno":"'.$row["fld_studentno"].'",';
	$getstudent .= '"lastname":"'.$row["fld_lastname"].'",';
	$getstudent .= '"firstname":"'.$row["fld_firstname"].'",';
	$getstudent .= '"middlename":"'.$row["fld_middlename"].'",';
	$getstudent .= '"course":"'.$row["fld_course"].'"';
	$getstudent .= '}';
	
} 



echo $getstudent;

?>
