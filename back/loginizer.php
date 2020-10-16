<?php
session_start();
include("inc/Engine/config.php"); 

$username=$_POST['usn'];
$temppass=$_POST['pass'];
$password=md5($temppass);

//kullanıcı adı ve şifeyi sorguluyoruz
$sql="SELECT * FROM admin WHERE user='$username' and pass='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


$user = $row['user'];
$pass = $row['pass'];

if($user == $username && $password == $pass)
{
$_SESSION['username'] = $username;
header("location: basarili.php"); 
}else
{
header("location: hatali.php"); 
}




?>