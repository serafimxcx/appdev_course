<?php

include("connect.php");

$query = "select * from tbl_course where id=".$_REQUEST["course_id"];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$getcourse = "";

if ( $row = mysqli_fetch_assoc($result) ) {
	
	$getcourse = '{';
	$getcourse .= '"course":"'.$row["fld_course"].'"';
	$getcourse .= '}';
	
} 



echo $getcourse;

?>
