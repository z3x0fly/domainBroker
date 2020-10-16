<?php
include ("PathHelper.php");
$conf_file2;
$id = (int)$_GET['id'];

$update = $con->prepare("DELETE FROM domainler WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
$update->close();
header("location: ../basarili.php"); 
?>