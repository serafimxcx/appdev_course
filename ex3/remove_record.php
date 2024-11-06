<?php

include("connect.php");

$query = "delete from students 
			where student_id=".intval($_REQUEST["student_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
