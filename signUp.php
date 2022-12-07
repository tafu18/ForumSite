<!DOCTYPE html>
<html>
<head>
	<title>Kayıt</title>
	<style>
		*{margin: 0px;
			padding: 0px;
		}
		h1{text-align: center;
			margin-top: 50px;}
		
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
		button{
			width: 20%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 18px;
			margin: 10px 0px 10px 0px;
			box-shadow: 1px 1px 2px 1px grey;
			margin-bottom: 16px;
		}


	</style>
</head>
<body>
	<BODY BGCOLOR="lightblue">
	<form method="POST" action="signUpKontrol.php" >

	<div  class="KullanıcıBilgileri">
		<h1>Üye Ol</h1>
		
		<input type="text" name="isim" placeholder="Adınız..." required><br><br>
		<input type="text" name="soyisim" placeholder="Soydınız..." required><br><br>
		<input type="text" name="uyeAdi" placeholder="Üye Adınız..." required><br><br>
		<input type="text" name="eposta" placeholder="E-Posta Adresiniz..." required><br><br>
		<input type="password" name="sifre" placeholder="Şifreniz..." required><br><br>
		<input type="password" name="sifreT" placeholder="(Tekrar)Şifreniz..." required><br><br>
		<input type="submit" name="kaydet" value="Kaydet"><br><br>
		<button onclick="window.location.href='signIn.php'">Giriş Yap</button>

	</div>
	</form>


</body>
</html>
<?php include 'altKisim.html' ?>