<?php
    include("connect.php");
    include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container fluid">
        <div class="col-sm-6" id="inptdiv">
            <form onload="return false;">
                <div class="row">
                    <div class="col">
                        <hr><h2>Manage Student</h2><hr><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="txt_lname">Student Number: </label>
                    </div>
                    <div class="col">
                        <input type="text" data_type="vc" maxlength="11" name="txt_studentno" class="form-control" id="txt_studentno"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="txt_lname">Last Name: </label>
                    </div>
                    <div class="col">
                        <input type="text" data_type="vc" name="txt_lname" class="form-control" id="txt_lname"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="txt_fname">First Name: </label>
                    </div>
                    <div class="col">
                        <input type="text" data_type="vc" name="txt_fname" class="form-control" id="txt_fname"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="txt_mname">Middle Name: </label>
                    </div>
                    <div class="col">
                        <input type="text" data_type="vc" name="txt_mname" class="form-control" id="txt_mname"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="slct_course">Course: </label>
                    </div>
                    <div class="col">
                        <select name="slct_course" data_type="vc" class="form-control" id="slct_course"></select><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success" id="btn_savestudent">Save</button>
                        <button type="button" class="btn btn-warning" id="btn_cancelstudent">Cancel</button>
                    </div>
                </div>


                <input type="hidden" id="txt_student_id" value="0">
            </form>
        </div>
        <br><br>
        <div class="col-sm-6">
            <select id="sort_course" class="form-control"></select><br>
            <div id="records_student">

            </div>
        </div>
    </div>
    <br><br>
</body>
</html>