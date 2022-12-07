<?php 
session_start();
include 'db.php';



$Sayfa = @intval($_GET['sayfa']); if(!$Sayfa) $Sayfa = 1;

$Say = $db->query("SELECT * FROM sorular ORDER BY id DESC");
$ToplamVeri = $Say->rowCount();

$Limit = 16;
$Sayfa_Sayisi = ceil($ToplamVeri/$Limit); if($Sayfa > $Sayfa_Sayisi) $Sayfa = 1;

$Goster = $Sayfa * $Limit - $Limit;
$GorunenSayfa = 5;

$soru = $db->query("SELECT sorular.id,sorular.baslik,uye.uyeAdi 
	FROM sorular
	INNER JOIN uye
	ON sorular.uye_id_soru = uye.id ORDER BY id ASC LIMIT $Goster,$Limit ");

$soruAl = $soru->fetchAll(PDO::FETCH_ASSOC);

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ana Sayfa</title>
	<style type="text/css">
		body{
			background-color: lightblue;
		}
		*{
			margin: 0px;
			padding: 0px;
		}

		div.soruTablosu{
			height: auto;
			margin-bottom: 70px;
		}

		table.sorTab {
			margin-top: 3.5%;
			position: relative;
			left: 33%;
			border-collapse: collapse;
			background-color: white;
			font-size: 17px;
			width: 35%;		

		}
		 
		table.sorTab td, table.sorTab th {
			border: 1px solid #ddd;
			padding: 8px;
		}
		 
		table.sorTab tr:nth-child(even){background-color: #f2f2f2;}
		 
		table.sorTab tr:hover {
			background-color: #2ecc71;
			color:#fff;
		}
		 
		table.sorTab th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #2c3e50;
			color: white;
		}

		div.pagination{
			position: relative;
			display: flex;
			flex-direction: row;
			margin-top: 1%;
			width: 19%;
			left: 46%;
			font-size: 25px;


		}
		div.pagination a{
			color: white;
		}

		img.reklam{
			margin-top: 1%;
			margin-left: 39%;
			margin-bottom: 2%;	

		}

		img.yanReklam{
			position: fixed;
			margin-top: 19%;
			margin-left: 90%;
		}
		img.altReklam{
			margin-top: 1%;
			margin-left: 39%;
		}

	</style>
</head>
<body>
	<?php include 'ustKisim.php'; ?>
	<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
 	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >

	<div class="Sorular">
		
		<div class="soruTablosu">
			<?php 
				$sorular = [];
				foreach ($soruAl as $sor) array_push($sorular, $sor);

				echo '<table class="sorTab">';
				echo "<tr> <th>Kullanıcı</th> <th>Sorusu</th>  </tr>";

				foreach ($sorular as $soru) {
						echo "<tr>";
						$elem = "<td>" . $soru['uyeAdi'] . ": </td> <td>" . '<a href = "soru.php?soru_id=' . $soru['id'] . '"">' . $soru['baslik'] . '</a></br>' . '</td>';
						echo "</tr>";
					echo $elem;; 
				}
				echo "</table>";

			 ?>
		</div>
		<div class="pagination">
			<?php 
			if($Sayfa > 1){?>
				<div class="say_sabit"><a style="box-shadow: 1px 1px darkgrey; background-color: #2c3e50; margin-right: 5px; " href="anasayfa.php?sayfa=1">İlk</a></div>

				<div class="say_sabit"><a style="box-shadow: 1px 1px darkgrey; background-color: #2c3e50; margin-right: 5px; " href="anasayfa.php?sayfa=<?=$Sayfa - 1 ?>">Önceki</a></div>

		<?php

			}

		for($i = $Sayfa - $GorunenSayfa; $i < $Sayfa + $GorunenSayfa + 1; $i++){
			if ($i > 0 and $i <= $Sayfa_Sayisi){
				if ($i == $Sayfa){
					echo '<a class="say_aktif" style="box-shadow: 1px 1px darkgrey; background: grey; margin-right: 5px; ">'.$i.'</a>';	
				}
				else{
				echo '<a class="say_a" style="box-shadow: 1px 1px darkgrey; background-color: #2c3e50; margin-right: 5px; " href="anasayfa.php?sayfa='.$i.'">'.$i.'</a>';
				}
			}
		}		

		if ($Sayfa != $Sayfa_Sayisi){
		?>

		<div class_sabit>
			<a style="box-shadow: 1px 1px darkgrey; background-color: #2c3e50; margin-right: 5px; " href="anasayfa.php?sayfa=<?=$Sayfa + 1?>">Sonraki</a>
		</div>
		
		<div class="say_sabit">
		<a style="box-shadow: 3px darkgrey;background-color: #2c3e50; " href="anasayfa.php?sayfa=<?=$Sayfa_Sayisi?>">Son</a>
		</div>
		</div>
		<?php } ?>
	</div>
		<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
	<div class="alt">
		<?php include 'altKisim.html'; ?>
	</div>

</body>
</html>
