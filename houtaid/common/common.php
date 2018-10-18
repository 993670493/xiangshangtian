<?php
isset($_SESSION) || session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'hs', 3306);
$mysql->query('SET NAMES UTF8');