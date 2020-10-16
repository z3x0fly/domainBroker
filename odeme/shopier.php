<?php
session_start();

$isim = $_POST["isim"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$_SESSION['tutar'] = $tutar = $_POST["tutar"];
$adres = $_POST["avatar"];
$_SESSION['eskibakiye'] = $_POST["eskibakiye"];
$sipno = rand();
$urun = $_POST["hizmet"];

include 'shopierAPI.php'; 
$shopier = new Shopier('ApiKEY giriniz', 'SECRETKEy giriniz');
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
die($shopier->run($sipno, $tutar, 'shopierNotify.php')); 
?>
