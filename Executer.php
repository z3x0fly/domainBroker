<?php

require_once("vendor/Helper/LicenseHelper.php");

$sorgu2 = $con->query("SELECT theme FROM site");

$cikti2 = $sorgu2->fetch_array();
$theme = $cikti2["theme"];

?>