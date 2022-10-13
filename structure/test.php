<?php
include("core.php");
include("schedule.php");


$startdate="2022/7/2";
$enddate="2022/7/8";

$res = mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($res,$db_name);

//$res = mysqli_connect('localhost','root','');
//mysqli_select_db($res,"neatschedule");
$r = mysqli_query($res,"SELECT * FROM `schedule_2_2022` WHERE `id`=161");
$r = mysqli_fetch_assoc($r);

$options['isremoveempty']=false;
$options['isremoveweekend']=true;

$selected=explode(',',$r['selected']);
if(!is_array($selected)){
    $selected=array();
}
if($selected[0]==""){
    $selected=array();
}
$selected= array();
$selected= array(0,1,2,3);
print_r($selected);

$begin = new DateTime($startdate);
$end   = new DateTime($enddate);

//print_r($end); 

function findbydate($date,$period){
    global $selected;
    $ret = array();
    foreach($selected as $key=>$val){
        if($date == new DateTime($val['date']) && $val['time'] == $period){
            $ret[] = $val;
        }
    }
    return $ret;
}

function findbydate2($date){
    global $selected;
    $ret = array();
    foreach($selected as $key=>$val){
        if($date == new DateTime($val['date'])){
            $ret[] = $val;
        }
    }
    return $ret;
}

function hasperiod($period){ // functionn to get the period of subject
    return true;
}

$cntcol=0;
$colind=array();
$colind[]= "erg";
foreach($period as $key=>$val){
    if(hasperiod($key)){
        $cntcol ++;
        $colind[]= $key;
    }
}

for($i = $begin; $i <= $end; $i->modify('+1 day')){
    $subject = findbydate2($i);
    if($options['isremoveempty'] and $subject == false)continue;
    if($options['isremoveweekend'] and ($i->format("w") == 5))continue;
 
    for($j = 0;$j <$cntcol;$j++){
        $subject = findbydate($i, $colind[$cntcol -  $j ]);
    }
}

echo "testing is good 2 \n";
?>