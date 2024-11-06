<?php 
    include("connect.php");

    $query = "select * from tbl_products";

    $result = mysqli_query($conn, $query) or die(mysql_error($conn));

    $loadprecords = "<table class='table table-hover'>";

    $loadprecords .= "<tr>
                    <th class='col-sx-1'>Product Code</th>
                    <th class='col-sx-1'>Description</th>
                    <th class='col-sx-1'>Category</th>
                    <th class='col-sx-1'>Price</th>
                    <th class='col-xs-1'></th>
                    </tr>";
    
    while($row = mysqli_fetch_assoc($result)){
    $loadprecords .= "<tr style='cursor:pointer;' class='p_records' product_id='".$row["id"]."'>
                    <td>".stripslashes($row["product_code"])."</td>
                    <td>".stripslashes($row["description"])."</td>
                    <td>".stripslashes($row["category"])."</td>
                    <td class='text-center'>".$row["price"]."</td>
                    <td><button type='button' class='remove-record btn-danger' product_id='".$row["id"]."'>X</button></td>
    
    </tr>";
    }


    $loadprecords .= "</table>";

    echo $loadprecords;
?>