<?php 

session_start();

if (!empty($_SESSION['GuyeAdi'])) {
	header("Location:anasayfa.php");
	exit();
}




$GuyeAdi = $_POST['GuyeAdi'] ?? null;
$Gsifre =  $_POST['Gsifre'] ?? null;
$hataMesaji ='';

if ($_POST) {
	// Form gönderilmiş ise burası çalışacak
	include 'db.php';

	$sorgu = $db->prepare("SELECT * FROM uye WHERE uyeAdi =:guyeAdi");
	$sorgu->execute(['guyeAdi' => $GuyeAdi ]);
	$uye = $sorgu->fetch(PDO::FETCH_ASSOC);
	$sql = $db->prepare("SELECT id FROM uye WHERE uyeAdi =:guyeAdi");
	$sql->execute(['guyeAdi' => $GuyeAdi ]);
	$id = $sql->fetch(PDO::FETCH_ASSOC);

	if($uye){
		//uye varsa
		if($Gsifre === $uye['sifre']){
			//Giris Doğru
			$_SESSION['id'] = $id;
			$_SESSION['uyeAdi'] = $GuyeAdi;
			header("Location:anasayfa.php");
		}else{
			//Giris Yanlıs
			$hataMesaji = "Şifre Hatalı";
		}
	}
	else{
		//uye yoksa
		$hataMesaji = "Böyle bir uye yok";
	}

}




 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Giriş</title>
		<style>
			*{margin: 0px;
				padding: 0px;}
			body{
				background-image: url(okul.jpg);
				background-position: center center;
				background-repeat: no-repeat;
			}


		h1{text-align: center;
			margin-top: 50px;}

		form{
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
		button{
			width: 20%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;

		}
		button.kayıt{margin-bottom: 292px;}
	</style>
</head>
<body>
	<BODY BGCOLOR="lightblue">

	<h1>Giriş Paneli</h1>
	<?php if($hataMesaji) {
		echo "<p style='color:red'>$hataMesaji</p>";
	}  ?>


	<form action="signIn.php" method="POST">

<!-- 	<img src="okul.jpg" alt="Okul" width="696" height="466" ><br> -->


	<input type="text" name="GuyeAdi" placeholder="Üye Adınız..." required><br><br>
	<input type="password" name="Gsifre" placeholder="Şifreniz..." required><br><br>
	<input type="submit" name="giris" value="Giriş"><br><br>
	<button class="kayıt" onclick="window.location.href='signUp.php'">Kayıt ol</button>

	</form>

</body>
</html>
<?php include 'altKisim.html' ?>