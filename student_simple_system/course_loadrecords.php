<?php 
    include("connect.php");

    $query = "select * from tbl_course";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $loadcourse = "<table class='table table-hover'> ";
    $loadcourse .= "<tr>
                    <th class='col-xs-1 text-center'>Course</th>
                    <th class='col-xs-1'></th>
                    </tr>";

    while($row = mysqli_fetch_assoc($result)){
        $loadcourse .= "<tr style='cursor:pointer;' class='course_records' course_id='".$row["id"]."'>
                            <td width='90%'>".stripslashes($row["fld_course"])."</td>
                            <td width='10%'><button type='button' class='remove-course btn-danger' course_id='".$row["id"]."'>X</button></td>
                        </tr>";
    }

    $loadcourse .= "</table>";

echo $loadcourse;
?>