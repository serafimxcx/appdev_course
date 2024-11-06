<?php 
    include("connect.php");
    session_start();

    $user = "";
    $pass = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inptuser = $_POST['txt_username'];
        $inptpass = $_POST['txt_password'];

        $query = "select * from tbl_useracc where fld_username like '$inptuser'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $user = $row['fld_username'];
            $pass = $row['fld_password'];
        }
        if($inptpass == "" || $inptuser =="") {
            $response = array('success'=>false,'message'=>'Login Failed. Blank Input. Please Try Again.');

            echo json_encode($response);
        }
        elseif ($inptuser == $user && $inptpass == $pass) {
            $response = array('success'=>true, 'message'=>" You are successfully logged in. Welcome $inptuser");
            $_SESSION['admin_username'] = $inptuser;
            
            echo json_encode($response);
        
        } else {
            $response = array('success'=>false, 'message'=>'Login Failed. Wrong Input. Please Try Again.');

            echo json_encode($response);
        }
    }
?>