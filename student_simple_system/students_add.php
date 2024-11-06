<?php 
    include("connect.php");

    $query="insert into tbl_students (fld_studentno, fld_lastname, fld_firstname, fld_middlename, fld_course)
    values('".mysqli_real_escape_string($conn, $_REQUEST["txt_studentno"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["txt_lname"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["txt_fname"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["txt_mname"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["slct_course"])."'
    )";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo "";
?>