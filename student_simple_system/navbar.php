<?php 
    include("connect.php");
    session_start();

    if(!isset($_SESSION['admin_username'])) {
        echo "<script>alert('Access Denied. Please Login your Account.');
        window.location.href='index.php'</script>";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid" >
      <div class="navbar-header"  >
        <a class="navbar-brand" href="dashboard.php">Welcome</a>
      </div>
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Files
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="course.php">Courses</a></li>
          <li><a href="students.php">Students</a></li>
          <li><a href="report.php">Reports</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a onclick="Logout()"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>

    </div>
  </nav>
  </body>

    <script>
      function Logout(){
          if(confirm("Are you sure you want to logout your account?")){
            $.ajax({
                "type": 'POST',
                "url": 'logout.php',
                "success": function(response){
                   
                      alert("Successfully Logged out.");
                      window.location.href = 'index.php';
                    
                    
                    }
            });
          }
      }

    </script>
</html>
