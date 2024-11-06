<?php

include("connect.php");

$query = "select * from students order by grade";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));


$cH = "<table class='table table-hover'>";

$cH .= "<tr>
			<th class='col-xs-1'>Student #</th>
			<th class='col-xs-3'>Name</th>
			<th class='col-xs-1'>Birth Date</th>
			<th class='col-xs-1 text-center'>Grade</th>
			<th class='col-xs-1'></th>
		</tr>";
while ( $row = mysqli_fetch_assoc($result) ) {

	$cH .= "<tr style='cursor:pointer;' class='records' record_id='".$row["student_id"]."'>
				<td>".$row["student_number"]."</td>
				<td>".stripslashes($row["name"])."</td>
				<td>".date("m/d/Y",strtotime($row["birth_date"]))."</td>
				<td class='text-center'>".number_format($row["grade"],2)."</td>
				<td><button type='button' class='remove-record' record_id='".$row["student_id"]."'>X</button></td>
			</tr>";
	
}



$cH .= "</table>";

echo $cH;
?>
