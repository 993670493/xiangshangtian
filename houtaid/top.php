<?php
require './common/mysql.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主界面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">一起去黄山后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    上帝
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
                        <dd><a href="javascript:">用户列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:">用户发布的内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:">分享列表</a></dd>
                        <dd><a href="javascript:">评论列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:">景区概况</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:">概况列表</a></dd>
                        <dd><a href="javascript:">概况添加</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:">旅游攻略</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:">攻略列表</a></dd>
                        <dd><a href="javascript:">攻略添加</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>