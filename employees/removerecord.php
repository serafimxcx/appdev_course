<?php

include("connect.php");

$query = "delete from tbl_employees where employee_id=".intval($_REQUEST["employee_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
