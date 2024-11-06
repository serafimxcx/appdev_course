<?php

include("connect.php");

$query = "select * from students where student_id=".$_REQUEST["student_id"];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$cJ = "";

if ( $row = mysqli_fetch_assoc($result) ) {
	
	$cJ = '{';
	$cJ .= '"student_number":"'.$row["student_number"].'",';
	$cJ .= '"name":"'.$row["name"].'",';
	$cJ .= '"birth_date":"'.date("m/d/Y",strtotime($row["birth_date"])).'",';
	$cJ .= '"grade":'.$row["grade"];
	$cJ .= '}';
	
} 



echo $cJ;

?>
