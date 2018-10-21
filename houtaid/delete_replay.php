<?php
require('./common/mysql.php');
$rid = $_GET['rid'];
$sql = 'UPDATE reply SET status = 0, deletetime="'.date('Y-m-d H:i:s').'" WHERE rid = ' .$rid;
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
