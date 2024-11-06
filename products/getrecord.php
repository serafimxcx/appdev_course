<?php 
    include("connect.php");

    $query = "select * from tbl_products where id=".$_REQUEST["p_id"];

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $productinfo = "";

    if($row = mysqli_fetch_assoc($result)){
        $productinfo = '{';
        $productinfo .= '"product_code":"'.$row["product_code"].'",';
        $productinfo .= '"description":"'.$row["description"].'",';
        $productinfo .= '"category":"'.$row["category"].'",';
        $productinfo .= '"price":"'.$row["price"].'"';
        $productinfo .= '}';
    }

    echo $productinfo;


?>