<?php 
    include("connect.php");

    $query = "insert into tbl_products(product_code, description, category, price)
    values(
    '".mysqli_real_escape_string($conn, $_REQUEST["txt_pcode"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["txt_desc"])."',
    '".mysqli_real_escape_string($conn, $_REQUEST["slct_category"])."',
    '".floatval($_REQUEST["txt_price"])."'
    )";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    echo "";
?>