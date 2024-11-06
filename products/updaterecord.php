<?php

include("connect.php");

$query = "update tbl_products set
			product_code='".mysqli_real_escape_string($conn,$_REQUEST["txt_pcode"])."',
			description='".mysqli_real_escape_string($conn,$_REQUEST["txt_desc"])."',
			category='".mysqli_real_escape_string($conn,$_REQUEST["slct_category"])."',
			price='".mysqli_real_escape_string($conn,$_REQUEST["txt_price"])."'
			
			where id=".intval($_REQUEST["p_id"]);
mysqli_query($conn,$query) or die(mysqli_error($conn)."<br>".$query);

echo "";

?>
