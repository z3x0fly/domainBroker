<?php
session_start();
include("PathHelper.php");
$conf_file2;
$user_check=$_SESSION['username'];
$sql = mysqli_query($con,"SELECT * FROM uye WHERE kullaniciadi='$user_check' ");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user=$row['username'];
if(!isset($user_check))
{
header("Location: login.php");
}
?>