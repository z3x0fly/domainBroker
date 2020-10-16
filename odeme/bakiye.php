<?php 
session_start();
include '../include/baglan.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bakiye yukleme sayfası</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <?php 
$kullanicisor=$db->prepare("SELECT * FROM uyeler where mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
           ?>

<div class="container">
	<div class="row">
	 
	 <form action="shopier.php" method="post">
	 	<label>Ödenecek Tutar</label>
	 	<input class="form-control" placeholder="Lütfen ödeme yapmak istediğiniz tutarı giriniz." type="number" name="tutar">
	 	<input type="hidden" value="<?php echo $kullanicicek["bakiye"] ?>" name="eskibakiye">
	 	<input type="hidden" value="<?php echo $kullanicicek["isim"] ?>" name="isim">
	 	<input type="hidden" value="<?php echo $kullanicicek["mail"] ?>" name="mail">
	 	<input type="hidden" value="<?php echo $kullanicicek["tel"] ?>" name="tel">
	 	<input type="hidden" value="<?php echo $kullanicicek["avatar"] ?>" name="avatar">
	 	<label>Hizmet Seçiniz.</label>
	 	<select class="form-control" name="hizmet">

	 		<option value="web tasarım">Web Tasarım </option>
	 		<option value="instagram takipçi">instagram Takipçi</option>
	 		<option value="youtube abone">youtube Abone </option>
	 		
	 	</select>
<br>
	 	<button class="btn btn-md btn-success" type="submit">Ödeme Yap</button>

	 </form>	
     


	</div>



</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>