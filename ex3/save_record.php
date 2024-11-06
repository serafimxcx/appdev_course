<?php

include("connect.php");

$query = "insert into students(student_number,name,birth_date,grade)
			values('".mysqli_real_escape_string($conn,$_REQUEST["student_number"])."',
			'".mysqli_real_escape_string($conn,$_REQUEST["name"])."',
			'".date("Y/m/d",strtotime($_REQUEST["birth_date"]))."',
			".floatval($_REQUEST["grade"]).")";
			
mysqli_query($conn,$query) or die(mysqli_error($conn));


echo "";

?>
