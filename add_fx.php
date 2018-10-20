<?php
require('./common/mysql.php');
foreach ($_POST as $key => $value) $$key = addslashes($value);
$sql='INSERT into share(head,title,texts,aid,addtime) values("'.$head.'","'.$title.'","'.$text.'","'.$_SESSION['aid'].'","'.date('Y-m-d H:i:s', time()).'")';
$r = $mydb->query($sql);
if ($r) {
    echo json_encode(['r'=>'ok']);
} else {
    echo json_encode(['r'=>'fail']);
}
