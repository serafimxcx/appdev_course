<?php

include("connect.php");

if($_REQUEST["slct_sort"] == ""){
	if($_REQUEST["sort_order"] == "ASC"){
		$query = "select * from tbl_employees order by last_name ASC";
	}elseif($_REQUEST["sort_order"] == "DESC"){
		$query = "select * from tbl_employees order by last_name DESC";
	}
	
}elseif($_REQUEST["slct_sort"] == "Age"){
	if($_REQUEST["sort_order"] == "ASC"){
		$query = "select * from tbl_employees order by birth_date ASC";
	}elseif($_REQUEST["sort_order"] == "DESC"){
		$query = "select * from tbl_employees order by birth_date DESC";
	}
	
}elseif($_REQUEST["slct_sort"] == "Monthly Salary"){
	if($_REQUEST["sort_order"] == "ASC"){
		$query = "select * from tbl_employees order by monthly_salary ASC";
	}elseif($_REQUEST["sort_order"] == "DESC"){
		$query = "select * from tbl_employees order by monthly_salary DESC";
	}
	
}


$result = mysqli_query($conn,$query) or die(mysqli_error($conn));


$cH = "<table class='table table-hover'>";

$cH .= "<tr>
			<th class='col-xs-1'>Employee Numbers</th>
			<th class='col-xs-1'>Last Name</th>
			<th class='col-xs-1'>First Name</th>
			<th class='col-xs-1'>Middle Name</th>
			<th class='col-xs-1'>Monthly Salary</th>
			<th class='col-xs-1'>Birth Date</th>
			<th class='col-xs-1'></th>
		</tr>";
while ( $row = mysqli_fetch_assoc($result) ) {

	$cH .= "<tr style='cursor:pointer;' class='records' record_id='".$row["employee_id"]."'>
				<td>".$row["employee_number"]."</td>
				<td>".stripslashes($row["last_name"])."</td>
				<td>".stripslashes($row["first_name"])."</td>
				<td>".stripslashes($row["middle_name"])."</td>
                <td class='text-center'>".$row["monthly_salary"]."</td>
				<td>".date("m/d/Y",strtotime($row["birth_date"]))."</td>
				<td><button type='button' class='remove-record btn-danger' record_id='".$row["employee_id"]."'>X</button></td>
			</tr>";
	
}



$cH .= "</table>";

echo $cH;
?>
