<?php

include("connect.php");

$query = "update tbl_course set
			fld_course='".mysqli_real_escape_string($conn,$_REQUEST["txt_course"])."'
			where id=".intval($_REQUEST["course_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
