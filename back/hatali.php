<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>İşlem Hatalı</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
  

.circle-wrapper {
  position: relative;
  width: 100px;
  height: 100px;
  float: left;
  margin: 10px;
}

.icon {
  position: absolute;
  color: #fff;
  font-size: 55px;
  top: 55px;
  left: 55px;
  transform: translate(-50%, -50%);
}

.circle {
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  padding: 2.5px;
  background-clip: content-box;
  animation: spin 10s linear infinite;
}

.circle-wrapper:active .circle {
  animation: spin 2s linear infinite;
}

.success {
  background-color: #4BB543;
  border: 2.5px dashed #4BB543;
}

.error {
  background-color: #CA0B00;
  border: 2.5px dashed #CA0B00;
}

.warning {
  background-color: #F0D500;
  border: 2.5px dashed #F0D500;
}

@keyframes spin { 
  100% { 
    transform: rotateZ(360deg);
  }
}

.page-wrapper {
  height: 100vh;
  background-color: #eee;
  display: flex;
  align-items: center;
  justify-content: center;
}


</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-wrapper">
  <!--div class="circle-wrapper">
    <div class="success circle"></div>
    <div class="icon">
      <i class="fa fa-check"></i>
    </div>
  </div-->


  <div class="circle-wrapper">
    <div class="error circle"></div>
    <div class="icon">
      <i class="fa fa-times"></i>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
<meta http-equiv="refresh" content="5;URL=anasayfa.php">
