<?php 

include 'db.php';
session_start(); 
include 'ustKisim.php';	
$uye_id = $_SESSION['id'];
$uyeIsim_id = $uye_id['id'];

$VerileriCek = $db->query("SELECT * FROM uye WHERE id = '$uyeIsim_id' ");
	if ($VerileriCek != false && !empty($VerileriCek)) {
	foreach ($VerileriCek as $veri){
		$id = $veri['id'];
		$isim = $veri['isim'];
		$soyisim = $veri['soyisim'];
		$uyeAdi = $veri['uyeAdi'];
		$eposta = $veri['eposta'];
		$sifre = $veri['sifre'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil Ekranı</title>
	<style>
		*{margin: 0px;
			padding: 0px;}
		div.veri{margin-left: 300px;
		}

		h3.baslik{text-align: center;
			margin-bottom: 10px;}

		form{text-align: center;}

		input{
			width: 20%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;

		}
		input.subBut{
			width: 10%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
		button.sifre{
			position: relative;
  			left: 1050px;
 			top: 0px	;
			text-align: center;
			background-color: blue;
			color: white;
			width: 10%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin-right: 50px;
			box-shadow: 1px 1px 2px 1px grey;

		}
		a{
			text-decoration: none;
			color: #40407a;
		}

		img.reklam{
			margin-top: 1%;
			margin-left: 39%;
		}

		img.yanReklam{
			position: fixed;
			margin-top: 5%;
			margin-left: 90%;
		}
		img.altReklam{
			margin-top: 1%;
			margin-left: 39%;
		}



	</style>
</head>
<body>


		<BODY BGCOLOR="lightblue">
	 	<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	 	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >

	 	<h3 class="baslik">Profil Düzenleme Ekranı</h3>
	<form method="POST"	>

		İsim: <?php echo $isim . "<br><br>" ?>
		Soyisim: <?php echo $soyisim . "<br><br>" ?>
		Üye Adı: <?php echo $uyeAdi . "<br><br>" ?>
		E-Posta: <?php echo $eposta . "<br><br>" ?>

		<input type="text" name="guncelIsim" placeholder="Adınız..." ><br><br>
		<input type="text" name="guncelSoyisim" placeholder="Soydınız..." ><br><br>
		<input type="text" name="guncelUyeAdi" placeholder="Üye Adınız..." ><br><br>
		<input type="text" name="guncelEposta" placeholder="E-Posta Adresiniz..." ><br><br>
		<input class="subBut" type="submit" name="guncelle" value="Güncelle">		

	</form>
		<button class="sifre" onclick="window.location.href = 'sifre.php';">Şifre Değiştir</button>
	<hr><br/>
	<div class="veri">
		
		<?php 

		if ($_POST) {
			$isimGuncel = $_POST['guncelIsim'];
			$soyisimGuncel = $_POST['guncelSoyisim'];
			$uyeAdiGuncel = $_POST['guncelUyeAdi'];
			$epostaGuncel = $_POST['guncelEposta'];


			if (!empty($isimGuncel)) {
					if($db->exec("UPDATE uye SET isim = '$isimGuncel' WHERE id = '$uyeIsim_id'")) header("Location:profil.php");
			}
			if (!empty($soyisimGuncel)) {
					if($db->exec("UPDATE uye SET soyisim = '$soyisimGuncel' WHERE id = '$uyeIsim_id'")) header("Location:profil.php");
			}
			if (!empty($uyeAdiGuncel)) {
					if($db->exec("UPDATE uye SET uyeAdi = '$uyeAdiGuncel' WHERE id = '$uyeIsim_id'")) header("Location:profil.php");
			}
			if (!empty($epostaGuncel)) {
					if($db->exec("UPDATE uye SET eposta = '$epostaGuncel' WHERE id = '$uyeIsim_id'")) header("Location:profil.php");
			}
			

		}
		echo "<h3 class='eko'>Aktif Kullanıcının Sorduğu Sorular</h3><br>";
			
			$satirlar = $db->query("SELECT sorular.id,sorular.baslik,uye.uyeAdi 
			FROM sorular
			INNER JOIN uye
			ON sorular.uye_id_soru = uye.id 
			WHERE uye.id = $uyeIsim_id ",PDO::FETCH_ASSOC);

			$sorular = [];
			foreach ($satirlar as $satir) {
				array_push($sorular, $satir);
			}	

				if (count($sorular) != 0) {
					foreach($sorular as $soru) {
					$elem =  $soru['uyeAdi'] . ": " . '<a href="soru.php?soru_id=' . $soru['id'] . '"">'  . $soru['baslik']  . '</a></br>';

					echo $elem .'</br>';}
			
				}else echo "Kullanıcı hiç soru sormamış...";




		echo "<h3 class='eko'>Aktif Kullanıcının Cevap Verdiği Sorular</h3><br>";

			$satirlar1 = $db->query("SELECT DISTINCT(sorular.baslik), sorular.id FROM cevaplar
			INNER JOIN sorular
			ON cevaplar.soru_id = sorular.id
			WHERE uye_id_cevap = $uyeIsim_id",PDO::FETCH_ASSOC);

			$cevaplar = [];
			foreach ($satirlar1 as $satir1) {
				array_push($cevaplar, $satir1);
			}	
				if (count($cevaplar) != 0) {
					foreach($cevaplar as $cevap) {
					$elem1 =  '<a href="soru.php?soru_id=' . $cevap['id'] . '"">'  . $cevap['baslik']  . '</a></br>';

					echo $elem1 .'</br>';
				}
				}else echo "Kullanıcı hiçbir soruya cevap vermemiş...";

				
 ?>
	</div>
		<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
</body>
</html>
<?php include 'altKisim.html'; ?>

