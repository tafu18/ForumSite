<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="ustKisim.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="leftSidebar2.css">
</head>
<body>

  <div id="leftSidebar" onclick="toggleLeftSidebar()">
    <div class="kutu">
      <a href="anasayfa.php">Ana sayfa</a>
    </div>
    <div class="kutu">
      <a href="yeniSoru.php">Yeni Soru</a>
    </div>
    <div class="kutu">
      <a href="profil.php" >Profil</a>
    </div>
    <div class="kutu">
      <a href="cikis.php">Oturumu Kapat</a>
    </div>
    <div class="leftSidebarButton"></div>   
  </div>

  <script type="text/javascript" src="main.js"></script>


  <div class="header">
    <ul class="head">
      <li><a href="anasayfa.php">Ana sayfa</a></li>
      <li><a href="yeniSoru.php">Soru Ekle</a></li>
      <li><a href="ders.php">Ders</a>
      <ul class="head">
          <li><a target="_blank" href="https://www.php.net/">PHP</a></li>
          <li><a target="_blank" href="https://www.w3.org/Style/CSS/">CSS</a></li> 
          <li><a target="_blank" href="https://whatwg.org/">HTML</a></li>      
        </ul>


      </li>
      <li> <a href="profil.php">Profil</a> </li>
      <li><a href="hakkımızda.php">Hakkımızda</a></li>
      <li><a href="iletisim.php">İletişim</a></li>
      <li><a  href="profil.php" > <?php  echo $_SESSION['uyeAdi']; ?></a></li>
      <li><a href="cikis.php">Çıkış</a></li>

  </ul>
  </div>




</body>
</html>