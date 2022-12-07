<!DOCTYPE html>
<html>
<head>
	<title>Dersler</title>
	<?php
		session_start(); 
	include 'ustKisim.php';		
	?>

	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background: lightblue;	
		}
		div.dersler{
	
			position: absolute;
			top: 30%;
			left: 34%;
		}
		h1{text-align: center;
			position: absolute;
			top: 19%;
			left: 45%;}


			img.reklam{
				margin-top: 1%;
				margin-left: 720px;
				margin-bottom: 30px;
			}
			img.yanReklam{
				position: fixed;
				margin-top: 50px;
				margin-left: 1700px;
			}
			img.altReklam{
				margin-top: 400px;
				margin-left: 720px;
				margin-bottom: 70px;
			}


	</style>
</head>
<body>

	<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >

		<H1>DERSLER</H1>

	<div class="dersler">
		
		<a target="_blank" href="https://www.php.net/"> <img src="php.ico" width="128;" height="128;"> </a> 
		<a target="_blank" href="https://www.w3.org/Style/CSS/"> <img style="margin-left: 75px;" src="css.ico" width="128;" height="128;" > </a>
		<a target="_blank" href="https://whatwg.org/"> <img style="margin-left: 75px;" src="html.ico" width="128;" height="128;"  > </a>
	</div>

		<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
</body>
</html>
<?php include 'altKisim.html'; ?>	