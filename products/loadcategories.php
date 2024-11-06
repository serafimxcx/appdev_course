<?php 
    include("connect.php");

    $query = "select * from categories";

    $result = mysqli_query($conn, $query) or die(mysql_error($conn));

    $categories = "<option value=''>Select...</option>";
    while($row = mysqli_fetch_assoc($result)){
        $categories .= "<option value='$row[description]'>$row[description]</option>";
    }

    echo $categories;
?>