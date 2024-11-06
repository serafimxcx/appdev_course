<?php 
    include("connect.php");

    if($_POST["sort_course"] == ""){
        $query = "select * from tbl_students order by fld_lastname";
        
    }else{
        $query = "select * from tbl_students where fld_course like '$_POST[sort_course]' order by fld_lastname";
    }
    

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $loadstudents = "<table class='table table-hover'> ";
    $loadstudents .= "<tr>
                    <th class='col-xs-1 text-center'>Student Number</th>
                    <th class='col-xs-1 text-center'>Last Name</th>
                    <th class='col-xs-1 text-center'>First Name</th>
                    <th class='col-xs-1 text-center'>Middle Name</th>
                    <th class='col-xs-1 text-center'>Course</th>
                    <th class='col-xs-1'></th>
                    </tr>";

    while($row = mysqli_fetch_assoc($result)){
        $loadstudents .= "<tr style='cursor:pointer;' class='student_records' student_id='".$row["id"]."'>
                            <td width='20%'>".stripslashes($row["fld_studentno"])."</td>
                            <td width='20%'>".stripslashes($row["fld_lastname"])."</td>
                            <td width='20%'>".stripslashes($row["fld_firstname"])."</td>
                            <td width='20%'>".stripslashes($row["fld_middlename"])."</td>
                            <td width='30%'>".stripslashes($row["fld_course"])."</td>
                            <td width='10%'><button type='button' class='remove-student btn-danger' student_id='".$row["id"]."'>X</button></td>
                        </tr>";
    }

    $loadstudents .= "</table>";

echo $loadstudents;
?>