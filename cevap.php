<!DOCTYPE html>
<html>
<head>
	<title>Cevabım Var</title>

	<style>
		form{ text-align: center; 
			margin-top: 80px;}
		textarea{
			resize: none;
		}
		h1{
			text-align: center;
			margin-top: 50px;
		}
		div.cevap{
			text-align: left;
			margin-left: 300px;
			margin-right: 300px;
			margin-top: 20px;
			margin-bottom: 100px;
			background-size: auto;
			font-size: 20px;
			font-family: "Times New Roman", Times, serif;
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
	</style>
</head>
<body>

	<BODY BGCOLOR="lightblue">
		<h1>Cevap Paneli</h1>
		<HR NOSHADE>
	<form target="_self" action="<?=$_SERVER['PHP_SELF'] . '?soru_id=' . $soru['id']?>" method="POST">
		
		<textarea name="cevap" rows="10" cols="100" required placeholder="Cevabınızı Giriniz..." $yazi= nl2br($yazi)></textarea><br><br>
		
		<input type="submit" name="cevapGonder" value="Cevabı Gönder"><br><br>
		<input name="soru_id" style="display: none" value="<?php echo $soru['id'] ?>">

		<div class="cevap">

		<?php 


			include 'db.php';
			
			$cevapCek = $db->query("SELECT uye.uyeAdi, cevaplar.cevap
						FROM uye
						INNER JOIN cevaplar
						ON uye.id = cevaplar.uye_id_cevap
						WHERE soru_id = '$soru_id'",PDO::FETCH_ASSOC);	
			if ($cevapCek != false && !empty($cevapCek)) {
				foreach ($cevapCek as $cevap){
					$uyeAdiCek = $cevap['uyeAdi'];
					$cevapCevap = $cevap["cevap"];
					echo '<b>'. $uyeAdiCek.": </b>". $cevapCevap . "<br>" . "<br>";	 				
					}	
	 			}
			if ($_POST) {
			 	$cevap = $_POST['cevap'];
			 	$soru_id = $_POST['soru_id'];
			 	$uye_id = $_SESSION['id'];
				$uye_id_cevap = $uye_id['id'];

		 		echo '<b>'.$_SESSION['uyeAdi'].": </b>".$cevap;

		 		if ($db->exec("INSERT INTO cevaplar (soru_id,uye_id_cevap,cevap) Values ('$soru_id','$uye_id_cevap','$cevap')")) {	
		 	}
		 	}			 	
		  ?>
		 </div>
	</form>
</body>
</html>