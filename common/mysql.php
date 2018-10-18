<?php
//第一步：创建数据库连接
isset($_SESSION)||session_start();
$mydb=new mysqli('localhost','root','root','hs',3306);

//第二步：设置编码
$mydb->query('SET NAMES UTF8');