<?php 
    include("connect.php");

    $query = "select * from tbl_course";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $optionCourse = "";

    $optionCourse = "<option value=''>Select Course...</option>";

    while($row = mysqli_fetch_assoc($result)){
        $optionCourse .= "<option value='$row[fld_course]'>$row[fld_course]</option>";
    }

    echo $optionCourse;
?>