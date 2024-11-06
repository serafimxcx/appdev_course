<?php
    include("connect.php");
    include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Course</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container fluid">
        <div class="col-sm-6" id="inptdiv">
            <form onload="return false;">
                
                <div class="row">
                    <div class="col">
                        <hr><h2>Manage Course</h2><hr><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="txt_course">Course:</label>
                    </div>
                    <div class="col">
                        <input type="text" data_type="vc" name="txt_course" class="form-control" id="txt_course"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success" id="btn_savecourse">Save</button>
                        <button type="button" class="btn btn-warning" id="btn_cancelcourse">Cancel</button>
                    </div>
                </div>
                
                <input type="hidden" id="txt_course_id" value="0">
            </form>
        </div>
        <br><br>
        <div class="col-sm-6">
            <div id="records_course">

            </div>
        </div>
    </div>
    <br><br>
</body>
</html>