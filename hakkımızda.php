<!DOCTYPE html>
<html>
<head>
	<title>Hakkımızda</title>
	<style>
		body{			background-color: lightblue;}
		*{
			margin: 0px;
			padding: 0px;
		}
		div.Vizyon{
			
			width: 85%;
			margin-left: 3%;
		}
		div.Misyon{
						
			width: 85%;
			margin-left: 3%;
		}
		h1{text-align: center;}
		img.reklam{
			margin-top: 1%;
			margin-left: 39%;
			margin-bottom: 3%;
		}
		img.yanReklam{
			position: fixed;
			margin-top: 10%;
			margin-left: 90%;
		}
		img.altReklam{
			margin-top: 1%;
			margin-left: 39%;

		}


	</style>
</head>
<body>
	<?php 
	session_start();
	include 'db.php'; 
	include 'ustKisim.php';	?>
	<img class="yanReklam" src="https://img.webme.com/pic/p/piriketseverler/dik_reklam.gif" width="138" height="240">
	<img class="reklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner3.jpg" width="468" height="60" >
<h1>Vizyonumuz</h1>
	<div class="Vizyon">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dignissim turpis, vitae euismod elit. Aliquam convallis massa eget nisi dapibus, quis bibendum tortor maximus. Mauris mauris arcu, congue id bibendum a, ultricies a ligula. Suspendisse egestas leo lorem, eget laoreet urna gravida sit amet. Suspendisse finibus, erat sed ullamcorper faucibus, sapien arcu vulputate turpis, at ullamcorper arcu nunc sed diam. Vestibulum efficitur convallis velit in efficitur. Fusce quis consectetur urna. Suspendisse diam nulla, lobortis in egestas eu, feugiat ac ex. Vivamus rhoncus eu sapien et interdum. Etiam et eros massa. Duis arcu tellus, pretium at consequat in, porttitor at nunc. Maecenas nec elementum libero, sed sagittis erat. Quisque sed laoreet nunc. Donec accumsan congue lacus, ut elementum nunc gravida sit amet. Ut vitae enim a est sollicitudin accumsan laoreet quis turpis.<br><br>

			Vestibulum placerat nec purus ac ullamcorper. Suspendisse scelerisque finibus ante, ut euismod metus dapibus nec. Aenean ullamcorper justo vel luctus porttitor. Etiam vel tellus vel nibh finibus imperdiet. Curabitur in suscipit nibh. Nullam justo sem, commodo quis pretium sit amet, dictum at orci. Nulla facilisi. Donec id rutrum arcu. Vivamus sapien turpis, ultricies in mauris non, tristique rutrum urna. Donec convallis vulputate ligula in faucibus. Nullam eu arcu nec nunc pellentesque dapibus pulvinar quis erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dapibus, purus id posuere placerat, nisl sem congue lacus, ut fringilla dui ex sit amet velit. Ut quis metus quis tortor ornare pretium vitae vitae nisl. Curabitur efficitur, diam in congue porttitor, turpis arcu pulvinar dui, in pharetra nibh mi sed mi.<br><br>

			Nulla dolor quam, aliquam eu tempor ut, accumsan eget nulla. Morbi sed ligula massa. Suspendisse potenti. Aenean sagittis ligula non mauris dapibus, at consectetur eros dapibus. Cras a augue ut tortor fringilla sagittis a in erat. Nullam justo libero, gravida sit amet diam ac, pellentesque congue felis. Nunc sit amet odio ante.<br><br>

			Nam sit amet sapien at quam pharetra pellentesque. Etiam sodales hendrerit dapibus. Phasellus suscipit est elit, ut vehicula dui tempor ac. Nunc ac vestibulum mauris. Vestibulum vel congue odio. Curabitur sed tempus mauris. Praesent hendrerit sit amet sapien ut laoreet. Donec eget condimentum erat, a egestas nunc. Vestibulum commodo porta consequat. Pellentesque vitae massa orci. Duis nec ipsum sapien.<br><br>
	</p>
	</div>
<h1>Misyonumuz</h1>
	<div class="Misyon">
		<p>	
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit odio, porttitor in porta nec, tempor ut sapien. Praesent hendrerit augue eget aliquam ornare. Ut hendrerit porttitor mauris, sit amet tempus ante hendrerit vitae. Vestibulum a hendrerit quam, a sollicitudin magna. Sed tincidunt eros mauris, consequat tristique massa blandit nec. Integer fringilla non erat sit amet hendrerit. Nunc quis tincidunt est. Praesent efficitur ipsum sapien, feugiat rutrum elit blandit at. Nam tempus venenatis metus et consequat.<br><br>

			Pellentesque augue tellus, maximus sit amet lorem sed, bibendum aliquet velit. Sed et interdum nunc. Cras dapibus massa nec lacus commodo, ut finibus mi placerat. Ut bibendum ligula vel eros eleifend molestie. Donec ullamcorper malesuada leo eu placerat. Donec vitae purus auctor, tempor nulla ac, bibendum eros. Mauris ligula nibh, dignissim at tincidunt sed, euismod eget enim. Nullam consequat id metus eu venenatis. Aenean lacinia quam eu feugiat dictum. Phasellus scelerisque porttitor malesuada. Nunc at magna pharetra, sagittis ligula ut, porttitor velit. Phasellus tincidunt ipsum sit amet laoreet scelerisque. Ut vel tortor elit. Sed convallis eu quam eu sodales. Praesent ac nulla volutpat sapien hendrerit sollicitudin ut sit amet neque. Donec interdum, arcu eu euismod consequat, quam libero laoreet neque, et suscipit elit metus sed mauris.<br><br>

			Mauris eu neque tempus, accumsan arcu porttitor, facilisis leo. Donec ut nisl turpis. Etiam volutpat sagittis purus vel pharetra. Nunc sed lacinia erat. Fusce porta mollis sollicitudin. Phasellus in nisi ex. Phasellus vitae iaculis sapien. Integer aliquam diam quis velit varius, ac consectetur nulla auctor. Etiam dignissim sit amet velit a ornare. Sed imperdiet fermentum nisl non ultrices. Ut viverra elementum ex et ultrices. Suspendisse et massa lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eu nisl vulputate, aliquet lorem in, lobortis risus. In sed mauris at nulla consequat blandit nec et felis.<br><br>
							
		</p>
		

	</div>

	<img class="altReklam" src="https://img.webme.com/pic/p/piriketseverler/reklambanner14.gif" width="468" height="60">
	<?php include 'altKisim.html';?>
</body>
</html>