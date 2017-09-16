<!DOCTYPE HTML>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="css/fontello.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

</head>
<body>

<div id="container">
	<div class="rectanlge1">
		<div id="logo" >
			Kamila Kaczmarek
		</div>
			<div id="zegar" >
			12:00:00
		</div>
			<div id="ico-zegar" >
			<i class="icon-clock"></i> 
			</div>
		<div style="clear:both;"></div>

	</div>

	<div id="nav">
		<div class="panel" data-content="menuglowne">
		Menu Główne
		</div>
		<div class="panel" data-content="galeria">
		Galeria
		</div>
		<div class="panel" data-content="kontakt">
		Kontakt
		</div>
		<div class="panel">
		Cennik
		</div>
	</div>
	<div style="clear:both;"></div>
	



	<div id="menu-content">
		
	</div>	

	
	<div style="clear:both;"></div>
	<div class="rectanlge2" style="color:white;font-size:30px;" >
		2017 © Kamila Kaczmarek - Portfolio. Lekarz Ginekolog zaprasza do współpracy!  misia.kamisia.kaczmarek@gmail.com
	</div>
	<div id="footer">
		Stopka
	</div>	
	
</div>


<script type="text/javascript">
	$(".panel").click(function() {

		var content = $(this).data("content");	
		$.ajax({
			url: '../php8/loader.php',
			type: 'post',
			data: { Content : content },
				success: function(response) {
						$("#menu-content").html(response);							
						
						
				}
		});
	
	});	
</script>


</body>
</html>

