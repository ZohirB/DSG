
<?php
    $conn = mysqli_connect("localhost", "root", "", "neatschedule");
    function Show_Table_SP ($column_name,$sql_Select,$tn){
        echo "<h2> $tn </h2>";
        echo "<div class='table-wrapper'>";
        echo "<table class='fl-table' id='table'>";
        echo "<thead>";
        echo "<tr>";
        $i = 0;
        while($i < sizeof($column_name)){
            echo "<th>". rem_($column_name[$i]) ."</th>";
            $i++;
        }
        echo "</tr>";
        echo "</thead>";

        // Check connection, if failed show error
        if ($GLOBALS['conn']-> connect_error) {
            die("Connection failed:". $GLOBALS['conn']-> connect_error);
        }

        $sql = $sql_Select;
        $result = $GLOBALS['conn'] -> query($sql);
        if ($result -> num_rows > 0){
            // Output data for each row
            while ($row = $result -> fetch_assoc()){
                echo "<tr>";
                foreach ($column_name as $element) {
                    echo "<td>". $row[$element]. "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "Not Found";
        }
        $GLOBALS['conn']-> close();
    }
    
    $column_name_ar = array();
    function Show_Table($Table_Name,$id_user) {
        global $column_name_ar;
        echo "<h2>قائمة المواد</h2>";
        echo "<div class='table-wrapper'>";
        echo "<table class='fl-table' id='table'>";
        echo "<thead>";
        echo "<tr>";
        $sql = "SHOW COLUMNS FROM ".$Table_Name; 
        $result = mysqli_query($GLOBALS['conn'],$sql);
        $column_name = array();
        $i = 0;
        while($row = mysqli_fetch_array($result)){
            if ($row['Field'] == "id_subject"){
                $column_name[] = $row['Field'];
                $column_name_ar[] = "رقم المادة";
                echo "<th>رقم المادة</th>";
                $i++;
            }
            if ($row['Field'] == "name_subject_arabic"){
                $column_name[] = $row['Field'];
                $column_name_ar[] = "اسم المادة";
                echo "<th>اسم المادة</th>";
                $i++;
            }
            if ($row['Field'] == "id_year"){
                $column_name[] = "name_year_arabic";
                $column_name_ar[] = "السنة";
                echo "<th>السنة</th>";
                $i++;
            }
            if ($row['Field'] == "id_sem"){
                $column_name[] = $row['Field'];
                $column_name_ar[] = "الفصل";
                echo "<th>الفصل</th>";
                $i++;
            }
            if ($row['Field'] == "ac_date"){
                $column_name[] = $row['Field'];
                $column_name_ar[] = "التاريخ";
                echo "<th>التاريخ</th>";
                $i++;
            }
            if ($row['Field'] == "id_time"){
                $column_name[] = "ac_time";
                $column_name_ar[] = "التوقيت";
                echo "<th>التوقيت</th>";
                $i++;
            }
        }
        echo "</tr>";
        echo "</thead>";

        // Check connection, if failed show error
        if ($GLOBALS['conn']-> connect_error) {
            die("Connection failed:". $GLOBALS['conn']-> connect_error);
        }
        //$sql = "SELECT * from ".$Table_Name." ORDER BY ID_".$Table_Name;
        $sql = "SELECT subjects.id_subject,subjects.name_subject_arabic,years.name_year_arabic,subjects.id_sem,subjects.ac_date,times.ac_time 
                FROM subjects 
                JOIN times ON subjects.id_time=times.id_time 
                JOIN years ON subjects.id_year=years.id_year
                WHERE id_user = ".$id_user."
            ";

        //$sql = "SELECT * from ".$Table_Name . " WHERE id_user = ".$id_user;
        $result = $GLOBALS['conn'] -> query($sql);
        if ($result -> num_rows > 0){
            // Output data for each row
            while ($row = $result -> fetch_assoc()){
                echo "<tr>";
                foreach ($column_name as $element) {
                    echo "<td>". $row[$element]. "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "No ".$Table_Name." Found";
        }      
  }
  
    function showing_edit_sec($Table_Name){
        global $column_name_ar;
        $co = sizeof($column_name_ar);
        $co1 = 0;

        echo "
        <div class='table-wrapper f2-table'> 
        <form action = 'new_fixture.php' method='post'>" ;
        while ($co>0){
            if ($co1 == 0){
                echo "
                <label for='cells_".$co1."'></label>
                <input type='hidden' name='cells_".$co1."' id='cells_".$co1."' placeholder='".$column_name_ar[$co1]."'>               
                ";
            } else if ($column_name_ar[$co1] == "السنة"){
                echo "
                <label for='cells_".$co1."'></label>
                <select name='cells_".$co1."' id='cells_".$co1."'>
                ";

                $column_name = array();
                $sql = "SHOW COLUMNS FROM years";
                $result = mysqli_query($GLOBALS['conn'],$sql);
                while($row = mysqli_fetch_array($result)){
                        $column_name[] = $row['Field'];
                }
                
                $sql = "SELECT * FROM years"; 
                $result = mysqli_query($GLOBALS['conn'],$sql);
                if ($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        echo "<option value='".$row['name_year_arabic']."'>".$row['name_year_arabic']."</option>";
                    }
                }
                else {
                    echo "Table time not Found";
                }
                echo "
                </select>
                <br>
                "; 
            } else if ($column_name_ar[$co1] == "الفصل"){
                echo "
                <label for='cells_".$co1."'></label>
                <select name='cells_".$co1."' id='cells_".$co1."'>
                ";
                echo "
                <option value='1'>الفصل الأول</option>
                <option value='2'>الفصل الثاني</option>
                </select>
                <br>
                "; 
            } else if ($column_name_ar[$co1] == "التاريخ"){
                echo "
                <label for='cells_".$co1."'></label>
                <input type='date' name='cells_".$co1."' id='cells_".$co1."' value='2023-01-01' min='2020-01-01' max='2030-12-31'>
                <br>
                ";
            } else if ($column_name_ar[$co1] == "التوقيت"){
                echo "
                <label for='cells_".$co1."'></label>
                <select name='cells_".$co1."' id='cells_".$co1."'>
                ";

                $column_name = array();
                $sql = "SHOW COLUMNS FROM times";
                $result = mysqli_query($GLOBALS['conn'],$sql);
                while($row = mysqli_fetch_array($result)){
                        $column_name[] = $row['Field'];
                }
                
                $sql = "SELECT * FROM times"; 
                $result = mysqli_query($GLOBALS['conn'],$sql);
                if ($result -> num_rows > 0){
                    while ($row = $result -> fetch_assoc()){
                        echo "<option value='".$row['ac_time']."'>".$row['ac_time']."</option>";
                    }
                }
                else {
                    echo "Table time not Found";
                }
                echo "
                </select>
                <br>
                ";  
            } else {
                echo "
                <label for='cells_".$co1."'></label>
                <input type='text' name='cells_".$co1."' id='cells_".$co1."' placeholder='".$column_name_ar[$co1]."'>               
                ";
            }
            $co1++;
            $co--;
        }

        echo "
                <input type='radio' name='".$Table_Name."_d' value='1'  /> 
                <label for='1'>إضافة المادة</label>
                <br>
                <input type='radio' name='".$Table_Name."_d' value='2' checked/> 
                <label for='2'>تحديث المادة</label>
                <br>
                <input type='radio' name='".$Table_Name."_d' value='3' /> 
                <label for='3'>حذف المادة</label>
                <br>
                <input type='submit' value='تنفيذ'>
            </form>
        </div>";
        $GLOBALS['conn']-> close();
    }

    function rem_($str){
        $f_Str ="";
        for ($i=0 ; $i < strlen($str) ; $i++){
            if ($str[$i] != '_'){
                  $f_Str .= $str[$i];
            }
            else{
              $f_Str .= ' ';
            }
        }
        return $f_Str;
    }
?>