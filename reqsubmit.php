<?php
require('./common/mysql.php');
foreach ($_POST as $key => $value) $$key = $value;
$passwd=md5($passwd);
$sql = 'INSERT INTO admin(username, passwd,  tel, addtime) VALUES ("' . $username . '","' . $passwd . '","' . $tel . '", "'.date('Y-m-d H:i:s', time()).'")';
$r = $mysql->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok', 'id'=>100]);
} else {
    echo json_encode(['r'=>'fail']);
}
