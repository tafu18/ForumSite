<!DOCTYPE html>
<html>
<head>
	<style>
		h3,h5{
			text-align: center;
		}
		a{
			text-align: center;
		}
		button{
			width: 20%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;

		}
		*{
			margin: 0px;
			padding: 0px;
		}
	</style>
	<title>Kayıt Durumu</title>
</head>
<body>


<BODY BGCOLOR="lightblue">
<?php
include 'db.php';
include 'ustKisimsignUp.php';
	
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$uyeAdi = $_POST['uyeAdi'];
$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];
$sifreT = $_POST['sifreT'];


	if ($_POST['kaydet']) {
			if (strlen($sifre) != 6 && strlen($sifreT) != 6) 
			{
				echo "<h3>Şifre uzunluğu 6 karakterden oluşmalıdır.</h3> "; $a0 = '<h5><a href="signUp.php">Tekrar Deneyin</a></h5> '; echo $a0;	
			}
			else
			{
				if ($sifreT != $sifre) 
			{
				echo "<h3>Girilen Şifreler Uyuşmuyor Tekrar Girin. </h3> "; $a1 = '<h5><a href="signUp.php">Tekrar Deneyin</a></h5>'; echo $a1;	
			}
			else
			{
				if ($db->exec("INSERT INTO uye (isim,soyisim,uyeAdi,eposta,sifre) VALUES ('$isim','$soyisim','$uyeAdi','$eposta','$sifre')")) {

					//echo "Kayıt eklendi";
				}
				echo '<h3>Kayıt Başarı ile Oluşturuldu.</h3>'; $a2 = '<h5><a href="signIn.php">Giriş</a></h5>'; echo $a2;
			}
			}	
	 	}
	
  ?>

</body>
</html>


  <?php   include 'altKisim.html';?>


