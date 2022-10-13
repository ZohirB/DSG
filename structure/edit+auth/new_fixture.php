<?php

$conn = mysqli_connect("localhost", "root", "", "neatschedule");
if ($GLOBALS['conn']-> connect_error) {
    die("Connection failed:". $GLOBALS['conn']-> connect_error);
}

if (isset($_POST['subjects_d'])) {
    session_start();
    $dataFromPage1 = $_SESSION['subjects_d'] = $_POST['subjects_d'];
    $cells_0 =  $_REQUEST['cells_0']; // id_subject
    $cells_1 =  $_REQUEST['cells_1']; // name_subject_arabic
    $cells_2 =  $_REQUEST['cells_2']; // id_year
    $cells_3 =  $_REQUEST['cells_3']; // id_sem
    $cells_4 =  $_REQUEST['cells_4']; // ac_date
    $cells_5 =  $_REQUEST['cells_5']; // id_time


    $str1 = '"'.$cells_2.'"'; // to get the year id
    $sql = "SELECT id_year from years where name_year_arabic = ".$str1.";";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $var_x1 = $row[0];


    $str2 = '"'.$cells_5.'"'; // to get the time id 
    $sql = "SELECT id_time from times where ac_time = ".$str2.";";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $var_x2 = $row[0];

    if ($dataFromPage1 == 1){ 
        $sql = "INSERT INTO subjects (name_subject_arabic,id_year,id_sem,ac_date,id_time,id_user)
                VALUES ('".$cells_1."','".$var_x1."','".$cells_3."','".$cells_4."','".$var_x2."','".$_SESSION['id_user']."');";

        $result = $GLOBALS['conn'] -> query($sql);
        $GLOBALS['conn']-> close();   
        echo " <br> New row affected (Inserted) At subjects table";
        //header("Location: phpTable.php");
    }
    
    else if ($dataFromPage1 == 2){
        $sql = "UPDATE subjects SET name_subject_arabic = '".$cells_1."' , id_year = '".$var_x1."' , id_sem = '".$cells_3."' , ac_date = '".$cells_4."' , id_time = '".$var_x2."'  
                WHERE id_subject = '".$cells_0."';";
        $result = $GLOBALS['conn'] -> query($sql);
        $GLOBALS['conn']-> close();
        //header("Location: phpTable.php");
        echo "One row affected (Updated) At subjects table";
    }
    else if ($dataFromPage1 == 3){
        $sql = "DELETE FROM subjects WHERE id_subject = '".$cells_0."';";
        $result = $GLOBALS['conn'] -> query($sql);
        $GLOBALS['conn']-> close();
        //header("Location: phpTable.php");
        echo "One row affected (Deleted) At subjects table";
        //echo "<meta http-equiv='refresh' content='0'>";
    }
} 

?>