<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">

    <script src="main.js"></script>
    <title>Products</title>
</head>
<body>
    <div class="container fluid">
        <br><br>
        <div class="col-sm-6">
            <div id="inpt_div">
                <form onload="return false;">
                <table width="100%">
                    <tr>
                        <td>Product Code: </td>
                        <td><input type="text" data_type="vc" name="txt_pcode" id="txt_pcode"><input type="hidden" id="p_id" value="0"></td>
                    </tr>
                    <tr>
                        <td>Description: </td>
                        <td><input type="text" data_type="vc" name="txt_desc" id="txt_desc"> </td>
                    </tr>
                    <tr>
                        <td>Category: </td>
                        <td><select name="slct_category" id="slct_category">
                            <!--load categories-->
                            
                        </select></td>
                    </tr>
                    <tr>
                        <td>Price: </td>
                        <td><input type="text" data_type="f" name="txt_price" id="txt_price"> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <button type="button" id="btn_save">Save</button>&nbsp;
                            <button type="button" id="btn_cancel">Cancel</button>
                            
                    </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>

        <div class="col-sm-6">
            <div id="productrecords">

            </div>
        </div>
    </div>
</body>
</html>