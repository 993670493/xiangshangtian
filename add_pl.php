<?php
require('./common/mysql.php');
foreach ($_POST as $k => $value) $$k = addslashes($value);
$sql2='select head from admin where aid="'.$_SESSION['aid'].'"';
$s=$mydb->query($sql2);
$admin = $s->fetch_array(MYSQLI_ASSOC);
foreach ($admin as $key => $value) {
    $$key = addslashes($value);
}
$sql='INSERT into comment(aid,text,fid,head,addtime) VALUE ("'.$_SESSION['aid'].'","'.$text.'","'.$fid.'","'.$head.'","'.date('Y-m-d H:i:s', time()).'")';
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
