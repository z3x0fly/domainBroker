<?php

include ("PathHelper.php");
$conf_file;
$site_name;

  $sorgu = $con->query("SELECT license_no FROM license");






$domain_sorgu = $con->query("SELECT domain, license_no FROM license");
$dom = $domain_sorgu->fetch_array();
$veri_tut = $dom["license_no"];
$veri_tut2 = $dom["domain"];
$ipadres = "127.0.0.1";

if ($site_name==$veri_tut2 && $ipadres == "127.0.0.1") {


}
else{

  echo '<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lisans Sorunu !</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
</br>
</br>
</br>
</br>
<div align="center">
<style>
.MsoNormal {
    margin: 0;
}
</style>
  <table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="background:#f9f9f9;border-collapse:collapse">
<tbody>
<tr>
<td style="padding:0in 0in 0in 0in"></td>
</tr>
<tr>
<td style="padding:0in 0in 0in 0in">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="4" cellpadding="0" width="600" style="width:6.25in;min-width:320px">
<tbody>
<tr>
<td style="padding:.75pt .75pt .75pt .75pt">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="max-width:476.25pt;border-collapse:collapse">
<tbody>
<tr>
<td valign="top" style="padding:.75pt .75pt .75pt .75pt">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
<tbody>
<tr>
<td style="padding:0in 0in 0in 0in"></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td valign="top" style="padding:0in 15.0pt 0in 15.0pt">
<div align="center">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;background-clip:padding-box;border-radius:3px;min-width: 550px;">
<tbody>
<tr>
<td valign="top" style="padding:0in 0in 0in 0in">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
<tbody>
<tr>
<td width="100%" valign="top" style="width:100.0%;background:#30b5b6;padding:0in 0in 0in 0in">
<p class="MsoNormal" style="line-height:2.25pt"><span style="font-size:1.0pt;font-family:&quot;Arial&quot;,sans-serif">&nbsp;<u></u><u></u></span></p>
</td>
</tr>
</tbody>
</table>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#545454;display:none"><u></u>&nbsp;<u></u></span></p>
<table class="m_-6602289591948772829MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border:none;background-clip:padding-box;border-radius:0 0 3px 3px">
<tbody>
<tr>
<td style="border:solid #dddddd 1.0pt;border-bottom:none;background:white;padding:30.0pt 30.0pt 22.5pt 30.0pt;background-clip:padding-box;border-radius:0 0 3px 3px;overflow:hidden"><h1 style="margin-right:0in;margin-bottom:5.25pt;margin-left:0in;line-height:24.75pt"> <span style="font-size:19.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#282f33;font-weight:normal">Lisans anahtarınız geçerli değil.<u></u></span></h1>
  <p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom:12.75pt;margin-left:0in"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252">Merhaba,</span></p>
  <p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom:12.75pt;margin-left:0in"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252">Kullanmakta olduğunuz yazılımın lisans problemi var. Sorunu çözmek istiyorsanız lütfen yazılım yapımcısına danışın. Lütfen korsan kullanmayınız. Korsana hayır ! Şayet kaynak kodlarını bir şekilde kırıp ve buraya kadar ustaca geldiyseniz lütfen bir empati yapın ve programı wareze düşürmekten vaz geçin. Gecesini gündüzüne katan bir öğrencinin haykırışı olduğunu asla unutmayın.</span></p>
  <p class="MsoNormal" style="margin-left:20.0pt;line-height:16.5pt">
<u></u><span style="font-size:10.0pt;font-family:Symbol;color:#525252"><span></span></span><u></u></p>
  
  <p class="MsoNormal" style="margin-left:33.0pt;line-height:16.5pt">
<u></u><u></u></p>
  
  
  <p class="MsoNormal" style="margin-left:33.0pt;line-height:16.5pt">
<u></u><span style="font-size:10.0pt;font-family:Symbol;color:#525252"><span></span></span><u></u></p>
<p class="MsoNormal" style="margin-left:33.0pt;line-height:16.5pt">
  <u></u><span style="font-size:10.0pt;font-family:Symbol;color:#525252"><span></span></span><u></u></p>
<p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom: 2pt;margin-top: 12pt;margin-left:0in;"><font color="#525252" face="Arial, sans-serif">Dosyalara müdahale ettiğiniz halde script kullanılamaz hale gelecek. Bu yüzden lüften dosyaları kırmakla ya da değiştirmekle uğraşmayınız.</font></p>
<p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom: 2pt;margin-top: 22pt;margin-left:0in;"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252"> İyi Günler.</span></p>
<p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom: 2pt;margin-top: 12pt;margin-left:0in;"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252">Emre Can Temur</span></p>
<p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom: 1.75pt;margin-left:0in;margin-top: 0px;"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252">Senior C# and PHP Developer</span></p>
<p class="m_-6602289591948772829intercom-align-left" style="margin-right:0in;margin-bottom: 2pt;margin-left:0in;margin-top: 2pt;"> <span style="font-size:11.5pt;font-family:&quot;Arial&quot;,sans-serif;color:#525252"><a href="mailto:work@emrecantemur.net.tr">work@emrecantemur.net.tr</a></span></p></td>
</tr>
</tbody>
</table>

<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%">
<tbody>
<tr>
<td width="100%" valign="top" style="width:100.0%;background:#30b5b6;padding:0in 0in 0in 0in">
<p class="MsoNormal" style="line-height:2.25pt"><span style="font-size:1.0pt;font-family:&quot;Arial&quot;,sans-serif">&nbsp;<u></u><u></u></span></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<p class="MsoNormal"><span style="display:none"><u></u>&nbsp;<u></u></span></p>
<div align="center">
<table class="m_-6602289591948772829MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;max-height:0;max-width:100%;opacity:0;overflow:hidden">
<tbody>
<tr style="height:13.5pt">
<td width="80" valign="top" style="width:60.0pt;padding:0in 0in 0in 30.0pt;height:13.5pt">
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#272727"><u></u><u></u></span></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>


</td>
</tr>
<tr style="height:7.5pt">
<td valign="top" style="padding:0in 0in 0in 0in;height:7.5pt"></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
<!-- partial -->
  
</body>
</html>
';
die();
}
?>