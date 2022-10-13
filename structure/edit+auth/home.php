<?php 
session_start();

if (isset($_SESSION['id_user']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/button.css">
          <?php include 'phpFun.php';?>
     </head>
     <body>
          <h1>مرحباً <?php echo $_SESSION['name']; ?></h1>
     
          <div class="grid">
               <form method="POST" action="phpTable.php">
                         <input type="submit" name="subjects" value="عرض المواد وتعديلها" class="button-18"><br><br>
               </form>
          </div>
          <div class="grid">
               <?php
                    echo "<a href='http://localhost/ESG/' class='button-18 button-19'>عرض صفحة مولد البرنامج الامتحاني</a>";
               ?>
          </div>

          <a href="logout.php">تسجيل الخروج</a>
     </body>
</html>


<?php 
 //echo $_SESSION['id_user'];
} else {
     header("Location: index.php");
     exit();
}
?>
