<?php
//oturumu kapatıp yönlendiriyoruz.
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>