<?php

include("connect.php");

$query = "update tbl_employees set
			employee_number='".mysqli_real_escape_string($conn,$_REQUEST["txt_employeenum"])."',
			last_name='".mysqli_real_escape_string($conn,$_REQUEST["txt_lastname"])."',
			first_name='".mysqli_real_escape_string($conn,$_REQUEST["txt_firstname"])."',
			middle_name='".mysqli_real_escape_string($conn,$_REQUEST["txt_middlename"])."',
            monthly_salary=".floatval($_REQUEST["txt_monthlysalary"]).",
			birth_date='".date("Y/m/d",strtotime($_REQUEST["txt_birthdate"]))."'
			
			where employee_id=".intval($_REQUEST["employee_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
