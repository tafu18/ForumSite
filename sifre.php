<?php include 'db.php';

session_start(); 
$uye_id = $_SESSION['id'];
$uyeIsim_id = $uye_id['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Şifre Değiştir</title>
		<style>
		div.cikis{text-align: right;
			margin-right: 75px;
			margin-bottom: 50px; }
		div.kullanici{
			margin-top: 50px;
			text-align: right;
			margin-right: 100px;
			background-size: auto;
			font-size: 20px;
			font-family: "Times New Roman", Times, serif;
		}
		h3{text-align: center;}

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
		input.sifre{
			margin-bottom: 288.8px;
		}



	</style>
</head>
<body>
		<?php
	include 'ustKisim.php';
 ?>

	<div class="kullanici">
		<labe>Aktif Kullanıcı: </label>
		<a  href="profil.php" > <?php echo $_SESSION['uyeAdi']; ?></a>	
	</div>
	<BODY BGCOLOR="lightblue">
	<h3>Şifre Değiştirme Paneli</h3>
	<form action="sifre.php" method="POST">
		<input type="password" name="guncelSifre" placeholder="Şifreniz..." required><br><br>
		<input type="password" name="guncelSifreT" placeholder="(Tekrar)Şifreniz..." required ><br><br>
		<input class="sifre" type="submit" name="guncelleSifre" value="Şifreyi Değiştir" ><br/><br/>
	</form>

</body>
</html>
<?php 

if ($_POST) {
	$sifreGuncel = $_POST['guncelSifre'];
	$sifreTGuncel = $_POST['guncelSifreT'];

		if ($sifreGuncel == $sifreTGuncel) {

		if (strlen($sifreGuncel) != 6 && strlen($sifreTGuncel) != 6) 
		{
			echo "Şifre uzunluğu 6 karakterden oluşmalıdır. ";
		}else{
				if($db->exec("UPDATE uye SET sifre = $sifreGuncel WHERE id = '$uyeIsim_id'"))
				header("Location:anasayfa.php");
						echo '<script type="text/javascript"> alert("Şifreniz Değiştirildi")</script> ';
			
		}		
	}else echo "Girilen Şifreler Uyuşmuyor";

}
?>
<?php include 'altKisim.html' ?>