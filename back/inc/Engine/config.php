<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'admingiris';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$con->set_charset("utf8");
error_reporting(0);
include 'ClassHelper.php';
$firewall;
$sec = new SimpleWAF();
$sec->secureMe(true);
?>