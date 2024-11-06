<?php
include("connect.php");
require_once('pdf/config/tcpdf_config.php');
require_once('pdf/tcpdf.php');

$multiplier = 72/2.54-2.90;
$width = 8.5; // inches
$length = 11;  // inches
$w = round($multiplier*$width);
$l = round($multiplier*$length)-2;
$page_orientation = "P";

include("pdfreport.php");

$pdf->AddPage();
$pdf->SetFont("helvetica", "", 12);

$content = '';

if(isset($_GET["sort_course"])){

$sort_course = $_GET["sort_course"];

if($sort_course == ""){
    $query = "select * from tbl_course";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result)){
        $content .= '<h3>Students of '. $row["fld_course"].'</h3>';

        $percoursequery = "select * from tbl_students where fld_course like '$row[fld_course]' order by fld_lastname ";
        $resultpercourse = mysqli_query($conn, $percoursequery) or die(mysqli_error($conn));

        $content .= '<style>
                        table th{ 
                            text-align: center; font-weight:bold; background-color: gray; color: white;
                        }
                        </style>

                    <table border="1" cellspacing="0" cellpadding="5">
                    <tr>
                        <th width="25%">Course</th>
                        <th width="15%">Student Number</th>
                        <th width="20%">Last Name</th>
                        <th width="20%">First Name</th>
                        <th width="20%">Middle Name</th>
                    </tr>';

        while($row2 = mysqli_fetch_assoc($resultpercourse)){
        $content .= '<tr>
                    <td>'.$row2["fld_course"].'</td>
                    <td>'.$row2["fld_studentno"].'</td>
                    <td>'.$row2["fld_lastname"].'</td>
                    <td>'.$row2["fld_firstname"].'</td>
                    <td>'.$row2["fld_middlename"].'</td>
                    </tr>';
        }
        $numstudents = mysqli_num_rows($resultpercourse);
        $content .= '<tr>
                <td colspan="5" style="font-weight: bold; text-align: right;" >Number of students: '. $numstudents.'</td>
                </tr>';

        $content .= '</table>';
        $content .= '<br><br>';

      
            
    }
   
}else{
    $query = "select * from tbl_students where fld_course like '$sort_course' order by fld_lastname";
    $content .= '<h3>Students of '. $sort_course.'</h3>';

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));




    $content .= '<style>th{ text-align: center; font-weight:bold; background-color: gray; color: white; }</style>

                <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th width="25%">Course</th>
                    <th width="15%">Student Number</th>
                    <th width="20%">Last Name</th>
                    <th width="20%">First Name</th>
                    <th width="20%">Middle Name</th>
                </tr>';

    while($row = mysqli_fetch_assoc($result)){
    $content .= '<tr>
                <td>'.$row["fld_course"].'</td>
                <td>'.$row["fld_studentno"].'</td>
                <td>'.$row["fld_lastname"].'</td>
                <td>'.$row["fld_firstname"].'</td>
                <td>'.$row["fld_middlename"].'</td>
                </tr>';
    }
    
    $numstudents = mysqli_num_rows($result);
    $content .= '<tr>
                <td colspan="5" style="font-weight: bold; text-align: right;">Number of students: '. $numstudents.'</td>
                </tr>';


    $content .= '</table>';
   
}



$pdf->writeHTML($content);


$cF = "test".date("YmdHis").".pdf";
$cFile = getcwd()."/".$cF;
$pdf->Output($cFile, "F");

while ( !file_exists($cFile) ) {
}

echo "<script>location='".$cF."';</script>";

}



?>
