<?php 
    include("connect.php");

    $query= "insert into tbl_course(fld_course)
    values('".mysqli_real_escape_string($conn, $_REQUEST["txt_course"])."')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo "";
?>