<?php
require './common/mysql.php';
if($_SESSION['aid']){
    $sql='select * from admin where aid="'.$_SESSION['aid'].'" and important =1';
    $r = $mydb->query($sql);
    $stu = $r->fetch_array(MYSQLI_ASSOC);
    foreach ($stu as $key => $value) {
        $$key = $value;
    }
}
if($_SESSION['important']!=1){
    header('Location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主界面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">一起去黄山后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:">
                    <img src="<?=$head?>" class="layui-nav-img">
                    <?=$username?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="./logout.php">退了</a></li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:">用户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="./select_admin.php">用户列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:">用户发布的内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="./select_share.php">分享列表</a></dd>
                        <dd><a href="./select_comment.php">评论列表</a></dd>
                        <dd><a href="./select_replay.php">回复列表</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>