<?php
isset($_SESSION)||session_start();
$mydb=new mysqli('localhost','root','root','hs',3306);
$mydb->query('SET NAMES UTF8');