<?php
require('./common/mysql.php');
foreach ($_POST as $k => $value) $$k = addslashes($value);
$sql='update share set status=0 where fid='.$fid;
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}