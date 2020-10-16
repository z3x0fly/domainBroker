<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:anasayfa.php');



}
else
{

}


?>
<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>Domain Paneli V4 Giriş</title>
  <link rel="stylesheet" href="parts/giris.css">

</head>
<body>
  <!-- CoDeD By HYDRA -->
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

</head>
<body id="body">

<div id="login-card" class="card">
<div class="card-body">
  <h2 class="text-center">Hoş Geldiniz</h2>
  <br>
  <form action="loginizer.php" method="POST">
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="Kullanıcı Adınız" name="usn">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" placeholder="Şifreniz" name="pass">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Giriş</button>
<br>
    <br>
   
    

  </form>
</div>
<div>
<!-- partial -->
  
</body>
</html>
