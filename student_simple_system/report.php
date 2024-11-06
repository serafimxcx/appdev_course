<?php
    include("connect.php");
    include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div class="container fluid">
        
        <div class="row">
            <div class="col">
                <select id="sort_course" class="form-control"></select>&nbsp;&nbsp;
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary" id="btn_load_report">Load Report</button><br><br>
            </div>
        </div>

        <iframe name="report" style="width:100%; height:500px;"></iframe>
        
    </div>
</body>
</html>