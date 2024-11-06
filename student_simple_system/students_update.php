<?php

include("connect.php");

$query = "update tbl_students set
			fld_lastname='".mysqli_real_escape_string($conn,$_REQUEST["txt_lname"])."',
			fld_firstname='".mysqli_real_escape_string($conn,$_REQUEST["txt_fname"])."',
			fld_middlename='".mysqli_real_escape_string($conn,$_REQUEST["txt_mname"])."',
			fld_course='".mysqli_real_escape_string($conn,$_REQUEST["slct_course"])."'
			where id=".intval($_REQUEST["student_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
