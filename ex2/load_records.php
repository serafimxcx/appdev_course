<?php

include("connect.php");

$query = "select * from students order by name";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$cH = "<table class='table'>";

$cH .= "<tr>
			<th class='col-xs-1'>Student #</th>
			<th class='col-xs-3'>Name</th>
			<th class='col-xs-1'>Birth Date</th>
			<th class='col-xs-1 text-center'>Grade</th>
		</tr>";
while ( $row = mysqli_fetch_assoc($result) ) {

	$cH .= "<tr>
				<td>".$row["student_number"]."</td>
				<td>".stripslashes($row["name"])."</td>
				<td>".date("m/d/Y",strtotime($row["birth_date"]))."</td>
				<td class='text-center'>".number_format($row["grade"],2)."</td>
			</tr>";
	
}

$cH .= "</table>";

echo $cH;
?>
