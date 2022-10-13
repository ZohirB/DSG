<?php
    session_start();

    include 'phpFun.php';

    echo "<!DOCTYPE html>";
    echo "<html dir='rtl' lang='ar'>";
    echo "<head>";
    echo "<title>Your Selection</title>";
    
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<link rel='stylesheet' href='css/button.css'>";
    echo "<link rel='stylesheet' href='css/st.css'>";
    echo "<script class='u-script' type='text/javascript' src='js/js.js' defer=''></script>";
    
    echo "</head>";
    echo "<body>";
    echo "<div class ='grid'>";

    if(isset($_POST['subjects'])){
        Show_Table("subjects",$_SESSION['id_user']);
        echo "</div>";
        echo "</table>";
        showing_edit_sec("subjects");
        echo "<a href='http://localhost/ESG/structure/edit+auth/home.php' class='button-18 button-19'>العودة إلى الصفحة الرئيسية</a><br>";
    }
    else {
        echo" Error 404";
    }
    echo "</div>";
    echo "</body>";
    echo "</html>";

?>