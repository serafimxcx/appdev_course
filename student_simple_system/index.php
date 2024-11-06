<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container fluid">
        <form onload="return false;">
            <div id="logindiv">
                <div class="row">
                    <div class="col-sm">
                        <h1><b>User Login</b></h1>
                        <h4>Login Your Account.</h4><hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="txt_username">Username:</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="txt_username" id="txt_username"><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label for="txt_username">Password:</label>
                    </div>
                    <div class="col-sm-5">
                        <input type="password" name="txt_password" id="txt_password"><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <button type="button" class="btn btn-primary" id="btn_login">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
    <script>
        $(function(){
            $("#btn_login").click(function(){
                var cParam = "";

                cParam = "txt_username="+$('#txt_username').val();
                cParam += "&txt_password="+$('#txt_password').val();
            
                $.ajax({
                "type": 'POST',
                "url": 'login.php',
                "data": cParam,
                "dataType": 'json',
                "success": function (response) {
                    if(response.success){
                        alert(response.message);
                        window.location.href = 'dashboard.php';
                    }else{
                        alert(response.message);
                    }
                    
                    }
                });
            });
        });
    </script>
</html>