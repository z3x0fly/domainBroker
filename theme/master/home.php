<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');

$conf_file = include_once(PATH.'back/inc/Engine/config.php');
$sorgu2 = $con->query("SELECT theme FROM site");

$cikti2 = $sorgu2->fetch_array();
$theme = $cikti2["theme"];
?>
<!DOCTYPE html>
<html lang="tr">
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#asama1 p{

  display: inline-block;

}
</style>
<!-- Mirrored from ydirection.com/Domain/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:38:17 GMT -->
<head>
    <meta charset="utf-8">
    <title>Domain Landing Page Template</title>
    <?php
    ?>
    <link rel="icon" href="assets/<?php  echo $theme; ?>/images/favicon.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Domain For Sale Landing Page">
    <meta name="keywords" content="Domain Landing Page Template, Domain Template, Domain, Domain For Sale">
    <link href="assets/<?php  echo $theme; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600%7CMuli" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link href="assets/<?php  echo $theme; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>
    <div class="wrapper"> <!-- Homepage Main Section-->
      <div class="main split split-3">
        <section class="split-home">
          <section class="left-section product-bg wow fadeInDown" data-wow-delay=".7s">
            <div class="inner">
              <div class="col-md-12">
                <h1><span>Kalite Domain</span></h1>
                <h1>Kaliteli Domain Portföy'ün Tek Adresi</h1>
                <p>Burada Bulunan Domainlerin Yaşları Belirtilmiştir. Ödeme onayı nedeniyle, tarafınızdan Ad Soyad &amp; Telefon Numarası Bilgileriniz Alınır. 3D Ödeme ile sistemden ödemeniz çekilir.</p>
              </div>
            </div>
          </section>
          <section class="right-section wow fadeInDown" data-wow-delay=".8s">
            <div class="extra">
              <div class="col-md-12">
                <div class="extra-box">
                  <h2>wptheme.com</h2>
                    <h1>Kayıt Tarihi :</h1> 
                    <h1>Bitiş Tarihi Tarihi :</h1>
                    <p><a class="btn btn-buy"  id="sipbuton">Şİmdİ Al</a>&nbsp;</p>

<div id="sipmodal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Sipariş Bilgileri</h3>
    <br>
    <br>
<form method="POST" action="shopier">
                        <input type="hidden" value="5" name="tutar"></input>
                        <input type="hidden" value="Domain" name="hizmet"></input>


<div id="asama1">
    <p>İsim Soyisim : </p> 
    <input type="text" name="isim"></input>
  </div>
  <div id="asama1">
    <p>E-Posta Adresiniz : </p>
    <input type="email" name="mail"></input>
  </div>
  <div id="asama1">
    <p>Telefon Numaranız</p>
        <input type="tel" name="tel"></input>
      </div>
      <div id="asama1">
                  <button><a class="btn btn-buy">Ödeme Yap</a>&nbsp;</button>

      </div>
    </form>



  </div>

</div>
                </div>
              </div>
</div>
          </section>
        </section>
      </div><!-- Main-->
    </div><!-- Wrapper -->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/<?php  echo $theme; ?>/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/<?php  echo $theme; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/<?php  echo $theme; ?>/js/plugins.js"></script>
    <script type="text/javascript" src="assets/<?php  echo $theme; ?>/js/custom.js"></script>
    <script>
// Get the modal
var modal = document.getElementById("sipmodal");

// Get the button that opens the modal
var btn = document.getElementById("sipbuton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  </body>

<!-- Mirrored from ydirection.com/Domain/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:38:30 GMT -->
</html>
