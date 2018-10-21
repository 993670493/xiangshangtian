<?php
require('./common/mysql.php');
$fid = $_GET['fid'];
$sql = 'UPDATE share SET status = 0, deletetime="'.date('Y-m-d H:i:s').'" WHERE fid = ' .$fid;
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
