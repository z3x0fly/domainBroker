<?php

define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
$firewall = include_once(PATH.'back/inc/Class/Firewall.Class.php');

$sec = new SimpleWAF();
$sec->secureMe(true);
?>