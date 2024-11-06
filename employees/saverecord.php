<?php 
include("connect.php");

$query = "insert into tbl_employees(employee_number, last_name, first_name, middle_name, monthly_salary, birth_date)
			values('".mysqli_real_escape_string($conn, $_REQUEST["txt_employeenum"])."',
			'".mysqli_real_escape_string($conn, $_REQUEST["txt_lastname"])."',
			'".mysqli_real_escape_string($conn, $_REQUEST["txt_firstname"])."',
			'".mysqli_real_escape_string($conn, $_REQUEST["txt_middlename"])."',
            ".floatval($_REQUEST["txt_monthlysalary"]).",
			'".date("Y/m/d",strtotime($_REQUEST["txt_birthdate"]))."')";
mysqli_query($conn,$query) or die(mysqli_error($conn));

echo "";
?>