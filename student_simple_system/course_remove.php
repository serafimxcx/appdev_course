<?php

include("connect.php");

$query = "delete from tbl_course 
			where id=".intval($_REQUEST["course_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
