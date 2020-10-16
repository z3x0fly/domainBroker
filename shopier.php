<?php
session_start();

$isim = $_POST["isim"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$_SESSION['tutar'] = $tutar = $_POST["tutar"];
$adres = $_POST["avatar"];
$sipno = rand();
$urun = $_POST["hizmet"];

include ("vendor/Helper/shopierAPI.php"); 
$shopier = new Shopier('890db0aceda7029be752bf9f18996521', '6afb59712d5c49652513e9444089414a');
$shopier->setBuyer([ 
'id' => $sipno, 
'paket' => $urun, 
'first_name' => $isim, 'last_name' => $isim, 'email' => $mail, 'phone' => $tel]); 
$shopier->setOrderBilling([
'billing_address' => $adres, //Kullanıcının adresi
'billing_city' => 'İstanbul',
'billing_country' => 'Türkiye', 
'billing_postcode' => '34000', 
]);
$shopier->setOrderShipping([
'shipping_address' => $adres, 
'shipping_city' => 'İstanbul', 
'shipping_country' => 'Türkiye', 
'shipping_postcode' => '34000', 
]);
$shopfile = include ("vendor/Helper/shopierNotify.php");
die($shopier->run($sipno, $tutar, $shopfile)); 

?>
