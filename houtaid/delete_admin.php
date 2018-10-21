<?php
require('./common/mysql.php');
$aid = $_GET['aid'];
$sql = 'UPDATE admin SET status = 0, deletetime="'.date('Y-m-d H:i:s').'" WHERE aid = ' .$aid;
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
