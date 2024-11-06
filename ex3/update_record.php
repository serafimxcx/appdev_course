<?php

include("connect.php");

$query = "update students set
			student_number='".mysqli_real_escape_string($conn,$_REQUEST["student_number"])."',
			name='".mysqli_real_escape_string($conn,$_REQUEST["name"])."',
			birth_date='".date("Y/m/d",strtotime($_REQUEST["birth_date"]))."',
			grade=".floatval($_REQUEST["grade"])."
			where student_id=".intval($_REQUEST["student_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
