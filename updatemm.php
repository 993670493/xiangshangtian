<?php
require('./common/mysql.php');
foreach ($_POST as $k => $value) $$k = $value;
$sql='select * from admin where aid="'.$_SESSION['aid'].'"';
$r = $mydb->query($sql);
$stu = $r->fetch_array(MYSQLI_ASSOC);
foreach ($stu as $key => $value) {
    $$key = $value;
}
$passwd_last=md5($passwd_last);
$passwd_new=md5($passwd_new);
if($passwd_last!=$passwd){
    echo json_encode(['r'=>'passwd_last']);
    exit;
}
$sql2='update admin set passwd="'.$passwd_new.'",updatetime="'.date('Y-m-d H:i:s').'" where aid="'.$_SESSION['aid'].'"';
$r=$mydb->query($sql2);
if ($r) {
    echo json_encode(['r'=>'ok', 'id'=>100]);
} else {
    echo json_encode(['r'=>'fail']);
}
