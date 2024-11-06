<?php

include("connect.php");

$query = "delete from tbl_students 
			where id=".intval($_REQUEST["student_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
