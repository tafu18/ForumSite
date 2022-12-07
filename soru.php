<?php 

include 'db.php';
session_start();
$soru_id = $_GET['soru_id'];

$query = $db->query("SELECT * FROM sorular WHERE id = '" . $soru_id . "'",PDO::FETCH_ASSOC);

foreach($query as $q)
	$soru = $q;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Soru</title>
	<style>	
		div.soru{
			text-align: center;
			margin-left: 300px;
			margin-right: 300px;
			margin-top: 50px;	
			background-size: auto;
			font-size: 30px;
			font-family: "Times New Roman", Times, serif;
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
				margin-bottom: 40px;
				margin-left: 720px;

			}
	</style>
</head>
<body>
		<?php
	include 'ustKisim.php';
 ?>
 			<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	 	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >
	<div class="soru" >
		<?php echo "<b>Başlık:</b> " . $soru['baslik'] . "<br>" . "<br>". "<b>Soru: </b>" . $soru['soru'] ."<br>"; ?>
	</div>
		<HR NOSHADE>
	<?php include 'cevap.php';?>
		<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
</body>
</html>
<?php include 'altKisim.html' ?>