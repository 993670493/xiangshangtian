<?php
require './common/mysql.php';
//查询用户信息
//var_dump($_POST);
$username = $_POST['username'];
$passwd = $_POST['passwd'];

$sql = 'SELECT aid, username, passwd ,important FROM admin WHERE  important=1 AND username = "'.$username.'" LIMIT 1';
$r = $mydb->query($sql);
$admin = $r->fetch_array(MYSQLI_ASSOC);
//判断账号是否存在
if(!$admin){
    echo json_encode(['r'=>'username_not_exist']);
    exit;
}

//判断密码是否正确  md5()
if(md5($passwd) != $admin['passwd']){
    echo json_encode(['r'=>'passwd_err']);
    exit;
}

//更新登录次数 最后一次登录时间
$sql = 'UPDATE admin SET nums = (nums + 1), logintimes = "'.date('Y-m-d H:i:s', time()).'" WHERE  important=1 AND aid = '.$admin['aid'].' LIMIT 1';
$mydb->query($sql);

//记录登录状态
$_SESSION['aid'] = $admin['aid'];
$_SESSION['username'] = $admin['username'];
$_SESSION['important'] = $admin['important'];
echo json_encode(['r'=>'ok']);