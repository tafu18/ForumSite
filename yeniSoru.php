<?php 
include 'db.php';
session_start();
if (!empty($_SESSION['eposta'])) {
	header("Location:signIn.php");
	exit();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sorum Var</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		body{background:lightblue}
		form{ text-align: center; 
			margin-top: 40px;
			margin-bottom: 20px; }
		textarea{
			resize: none;
		}
		h1{	margin-top: 50px;
			text-align: center;

		}

		input{
			width: 20%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;

		}

			img.reklam{
				margin-top: 20px;
				margin-left: 720px;
			}
			img.yanReklam{
				position: fixed;
				margin-top: 50px;
				margin-left: 1700px;
			}
			img.altReklam{
				margin-bottom: 100px;
				margin-left: 720px;

			}
	</style>

</head>
<body>
	
	


		<?php
		include 'ustKisim.php';
 		?>		
 		<h1>Soru Ekleme Paneli</h1>
		<HR NOSHADE>
		<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	 	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >
	<form action="yeniSoru.php" method="POST">
		

		<input type="text" name="ad" style="display: none;">
		<input type="text" name="soyad" style="display: none;"><br><br>

		<textarea name="baslik" rows="1" cols="100" placeholder="Başlığı Giriniz..." required></textarea><br><br>
		<textarea name="soru" rows="10" cols="100" placeholder="Sorunuzu Giriniz..." $yazi= nl2br($yazi) required></textarea><br><br>
		<input type="submit" name="soruGonder" value="Soruyu Gönder">

	</form>

			<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">

</body>
</html>

<?php 


if ($_POST) {

	include 'db.php';

	$baslik = $_POST['baslik'];
	$soru = $_POST['soru'];
	$uye_id = $_SESSION['id'];
	$uye_id_soru = $uye_id['id'];
	if($db->exec("INSERT INTO sorular (uye_id_soru,baslik,soru) VALUES ('$uye_id_soru','$baslik','$soru')")){
		header("Location:anasayfa.php");
	}

}


 ?>
<?php include 'altKisim.html' ?>