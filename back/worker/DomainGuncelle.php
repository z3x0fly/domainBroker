<?php 
include("PathHelper.php");
$conf_file2;
if ($_POST) {
    
    $id = $_POST['id']; 
    $domain = $_POST['domain']; 
    $ktarih = $_POST['k_tarihi']; 
    $btarih = $_POST['b_tarihi'];
    $starih = $_POST['sk_tarihi'];
    $durum = $_POST['durum'];
    $fiyat = $_POST['fiyat'];





    if ($id<>"" && $domain<>"" && $ktarih<>"" && $btarih<>"" && $starih<>"" && $durum<>""  ) { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($con->query("UPDATE domainler SET domain = '$domain', k_tarih = '$ktarih', b_tarih = '$btarih', s_tarih = '$starih', durum = '$durum'', fiyat = '$fiyat' WHERE id = '$id' ")) 
        {
            header("location:../basarili.php"); 
            // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
        }
        else
        {
                        header("location:../hatali.php"); 

        }
    }
}
?>