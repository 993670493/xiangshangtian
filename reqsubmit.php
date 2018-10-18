<?php
require('./common/mysql.php');
foreach ($_POST as $key => $value) $$key = $value;
$sql2='select * from admin where username='.'"'.$username.'"';
$s=$mydb->query($sql2);
$admin = $s->fetch_array(MYSQLI_ASSOC);
if($admin){
    echo json_encode(['r'=>'username_is_exist']);
    exit;
}
$passwd=md5($passwd);
$sql = 'INSERT INTO admin(username, passwd,  tel, addtime) VALUES ("' . $username . '","' . $passwd . '","' . $tel . '", "'.date('Y-m-d H:i:s', time()).'")';
$r = $mydb->query($sql);

if ($r) {
    echo json_encode(['r'=>'ok', 'id'=>100]);
} else {
    echo json_encode(['r'=>'fail']);
}
