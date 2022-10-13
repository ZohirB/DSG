<?php

<<<<<<< HEAD
// سنة ثالثة فصل أول
$data[]=array("name2"=>"خوارزميات (2)","name"=>"خوارزميات (2)", "time"=>3, "year"=>3,"date"=>"2022/7/2");
$data[]=array("name2"=>"معالج مصغر","name"=>"معالج مصغر", "time"=>1, "year"=>3,"date"=>"2022/7/2");
$data[]=array("name2"=>"معالجة اشارة","name"=>"معالجة اشارة", "time"=>2, "year"=>3,"date"=>"2022/7/2");
$data[]=array("name2"=>"قواعد معطيات  (1)","name"=>"قواعد معطيات  (1)", "time"=>1, "year"=>3,"date"=>"2022/7/4");
$data[]=array("name2"=>"رسوميات حاسوبية","name"=>"رسوميات حاسوبية", "time"=>2, "year"=>3,"date"=>"2022/7/4");
$data[]=array("name2"=>"نظرية معلومات","name"=>"نظرية معلومات", "time"=>3, "year"=>3,"date"=>"2022/7/4");
$data[]=array("name2"=>"نظرية المخططات","name"=>"نظرية المخططات", "time"=>5, "year"=>3,"date"=>"2022/7/4");
// سنة ثالثة فصل ثاني
$data[]=array("name2"=>"شبكات حاسوبية","name"=>"شبكات حاسوبية", "time"=>3, "year"=>3,"date"=>"2022/7/5");
$data[]=array("name2"=>"بنية وتنظيم الحاسب (1)","name"=>"بنية وتنظيم الحاسب (1)", "time"=>3, "year"=>3,"date"=>"2022/7/6");
$data[]=array("name2"=>"هندسة برمجيات (1)","name"=>"هندسة برمجيات (1)", "time"=>1, "year"=>3,"date"=>"2022/7/6");
$data[]=array("name2"=>"اتصالات تشابهية ورقمية","name"=>"اتصالات تشابهية ورقمية", "time"=>2, "year"=>3,"date"=>"2022/7/6");
$data[]=array("name2"=>"لغات صورية","name"=>"لغات صورية", "time"=>3, "year"=>3,"date"=>"2022/7/7");
$data[]=array("name2"=>"مبادئ الذكاء الصنعي","name"=>"مبادئ الذكاء الصنعي", "time"=>2, "year"=>3,"date"=>"2022/7/8");
$data[]=array("name2"=>"خوارزميات (3)","name"=>"خوارزميات (3)", "time"=>1, "year"=>3,"date"=>"2022/7/8");


$data[]=array("name2"=>"1","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/2");
$data[]=array("name2"=>"2","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/3");
$data[]=array("name2"=>"3","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/4");
$data[]=array("name2"=>"4","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/5");
$data[]=array("name2"=>"5","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/6");
$data[]=array("name2"=>"6","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/7");
$data[]=array("name2"=>"7","name"=>"", "time"=>6, "year"=>3,"date"=>"2022/7/8");


$data[]=array("name2"=>"نهاية البرنامج","name"=>"نهاية البرنامج", "time"=>1, "year"=>6,"date"=>"2000/1/1");


$startdate="2022/7/2";
$enddate="2022/7/8";

$period[1]="المحاضرة الأولى \n 10:30 - 09:00";
$period[2]="المحاضرة الثانية";
$period[3]="المحاضرة الثالثة";
$period[4]="المحاضرة الرابعة";
$period[5]="المحاضرة الخامسة";
$period[6]="المحاضرة السادسة";
=======
$data = array();
$res = new mysqli('localhost','root','','neatschedule');
mysqli_select_db($res,$db_name);
$qry = mysqli_query($res,"SELECT * FROM subjects");
while($res = mysqli_fetch_array($qry)) {
    $data[] = array("name2"=>$res['name_subject_arabic'],"name"=>$res['name_subject_arabic'], "time"=>$res['id_time'], "year"=>$res['id_year'],"date"=>$res['ac_date'], "id_sem"=>$res['id_sem']);
}    

$startdate="2020/6/26";
$enddate="2024/8/4";


$res = new mysqli('localhost','root','','neatschedule');
$qry = mysqli_query($res,"SELECT * FROM times");
$co = 1;
while($res = mysqli_fetch_array($qry)) {
    $period[$co] = $res['ac_time'];
    $co++;
}  
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27


$dayweek[]="الاحد";
$dayweek[]="الاثنين";
$dayweek[]="الثلاثاء";
$dayweek[]="الاربعاء";
$dayweek[]="الخميس";
$dayweek[]="الجمعة";
$dayweek[]="السبت";
$datetext = "اليوم";
<<<<<<< HEAD
$title="برنامج دوام الفصل الأول للعام الدراسي 2022/2023";
$subjecttext = "المادة";
$periodtext="";
=======

$title="برنامج الامتحان النظري - الفصل الثاني للعام الدراسي 2021/2022";
$subjecttext = "المادة";
$periodtext="الساعة";
>>>>>>> ea3bdd3567edd67c270e0ba83e2a45b9027b6b27
//$title="Text messaging, or texting, is the act of composing and sending electronic messages";
?>