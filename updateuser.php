<?php
require('./common/mysql.php');
foreach ($_POST as $key => $value) $$key = $value;
$sql = 'UPDATE admin SET username="'.$username.'",tel="'.$tel.'",uname="'.$uname.'",age="'.$age.'",head="'.$head.'",gender="'.$gender.'",updatetime="'.date('Y-m-d H:i:s').'" where aid="'.$_SESSION['aid'].'"';
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok', 'id'=>100]);
} else {
    echo json_encode(['r'=>'fail']);
}
