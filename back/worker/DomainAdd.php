<?php 
include("PathHelper.php");
$conf_file2;
if ($_POST) { 
    
    //$id = $_POST['id']; 
    $domain = $_POST['domain']; 
    $ktarih = $_POST['k_tarihi']; 
    $btarih = $_POST['b_tarihi'];
    $starih = $_POST['sk_tarihi'];
    $durum = $_POST['durum'];
    $fiyat = $_POST['fiyat'];

    $sql="INSERT INTO `domainler` (`domain`, `k_tarih`, `b_tarih`, `s_tarih`, `durum`, `fiyat`) VALUES ('$domain', '$ktarih', '$btarih', '$starih', '$durum','$fiyat');";
    $res=mysqli_query($con,$sql);
    if ($res)
        header("location:../basarili.php"); 
    else
         header("location:../hatali.php"); 



}


?>