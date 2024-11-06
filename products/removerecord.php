<?php 
    include("connect.php");

    $query = "delete from tbl_products where id=".$_REQUEST["p_id"];
    mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);
    
    echo "";
?>