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

    <title>Employees</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-sm-5">
            <br>
            <form onload="return false;">
            <table width="100%">
                <tr>
                    <td colspan="2"><h1>Manage Employees</h1><hr></td>
                </tr>
                <tr>
                    <td class="inpt_td">Employee Number:</td>
                    <td>&nbsp;<input type="text" size="10" data_type="vc" maxlength="10" class="form-control" id="txt_employeenum">
                    <input type="hidden" id="txt_id" value="0"></td>
                </tr>
                <tr>
                    <td class="inpt_td">Last Name:</td>
                    <td >&nbsp;<input type="text" size="10" data_type="vc" maxlength="50" class="form-control" id="txt_lastname"></td>
                </tr>
                <tr>
                    <td class="inpt_td">First Name:</td>
                    <td>&nbsp;<input type="text" size="10" data_type="vc" maxlength="50"  class="form-control" id="txt_firstname"></td>
                </tr>
                <tr>
                    <td class="inpt_td">Middle Name:</td>
                    <td >&nbsp;<input type="text" size="10" data_type="vc" maxlength="50" class="form-control" id="txt_middlename"></td>
                </tr>
                <tr>
                    <td class="inpt_td">Monthly Salary:</td>
                    <td >&nbsp;<input type="text" size="10" data_type="f" maxlength="11" class="form-control" id="txt_monthlysalary"></td>
                </tr>
                <tr>
                    <td class="inpt_td">Birth Date:</td>
                    <td>&nbsp;<input type="date" size="10" data_type="dt" maxlength="11" class="form-control" id="txt_birthdate"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr><br><button type="button" class="btn btn-success" id="btn_save">Save</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="btn_cancel">Cancel</button></td>
                </tr>
                <tr>
                    <td colspan="2"><br><div id="message" class="hidden">Please wait...</div></td>
                </tr>
            </table>
            </form>
            
        </div>
        <div class="col-sm-7">
            <br>
            <div id="recordscontainer">
                <table>
                    <tr>
                        
                        <td class="td_sort">Sort:</td>
                        <td class="td_sort"><select class="form-control" id="slct_sort">
                                <option value=""></option>
                                <option value="Age">Age</option>
                                <option value="Monthly Salary">Monthly Salary</option>
                            </select></td>
                        <td class="td_sort"><button type="button" class="btn btn-info" id="btn_sortorder"><span class="glyphicon">&#xe093;</span><span class="glyphicon">&#xe094;</span></button></td>
                    </tr>
                </table>
                
                <div id="records">
                    
                </div>

            </div>
            
        </div>
    </div>
</body>
</html>