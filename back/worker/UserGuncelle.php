<?php 
include("PathHelper.php");
$conf_file2;
if ($_POST) { 
    
    $username = $_POST['username']; 
    $temppass=$_POST['password'];
    $password=md5($temppass);
    //21232f297a57a5a743894a0e4a801fc3

    if ($username<>"" && $password<>"") { 
        
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($con->query("UPDATE admin SET user = '$username', pass = '$password' WHERE id = 1")) 
        {
            header("location:../cikis.php"); 
            
        }
        else
        {
            echo "Hata oluştu"; 
        }
    }
}
?>