<?php
require('./common/mysql.php');
$pid = $_GET['pid'];
$sql = 'UPDATE comment SET status = 0, deletetime="'.date('Y-m-d H:i:s').'" WHERE pid = ' .$pid;
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
