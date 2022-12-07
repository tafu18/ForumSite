<!DOCTYPE html>
<html>
<head>
	<title>İletişim</title>
	<style>
		*{
			margin: 0px;
			padding: 0px; 	
		}
		body{background: lightblue;}
		div.iletisim1,.iletisim2{
			text-align: center;
			position: absolute;
			left: 25%;
			top: 25%;
			text-align: left;
		}

		h1{
			text-align: center;	
			position: absolute;
			left: 25%;
			top: 15%;
		}

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
				margin-top: 418px;
				margin-left: 720px;
				margin-bottom: 70px;

			}


	</style>
</head>
<body>
	<?php
	session_start(); 
	include 'ustKisim.php'; ?>
	<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >
	<h1>İletişim Adresleri</h1>
	<div class="iletisim1">

		<img src="rehber.ico" width="20px;" height="25px">&emsp;&emsp;&emsp;Tayfun Taşdemir<br>
		<img src="telefon.ico" width="17px;" height="25px">&emsp;&emsp;&emsp;+90 538 597 23 18<br>
		<img src="mail.ico" width="25px;" height="25px">&emsp;&emsp;&emsp;tayfuntasdemir3@gmail.com<br><br>
	</div>
	<div style="margin-top: 100px;" class="iletisim2">
		<img src="rehber.ico" width="20px;" height="25px">&emsp;&emsp;&emsp;Yusuf Koçhan<br>
		<img src="telefon.ico" width="17px;" height="25px">&emsp;&emsp;&emsp;+90 545 580 52 35<br>
		<img src="mail.ico" width="25px;" height="25px">&emsp;&emsp;&emsp;yusufkochan3444@icloud.com<br>
	</div>
			<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
	<?php include 'altKisim.html'; ?>
</body>
</html>