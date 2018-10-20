<?php
require('./common/mysql.php');
foreach ($_POST as $k => $value) $$k = addslashes($value);
$sql='insert into reply(last_aid,pid,text_hf,aid,addtime) VALUE("'.$last_aid.'","'.$pid.'","'.$text_hf.'","'.$_SESSION['aid'].'","'.date('Y-m-d H:i:s', time()).'") ';
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
