		<div class="square">
			<div class="tile1" id="KimJestem" data-content="kimjestem">		
				<i class="icon-adult"></i>
				<br />Kim Jestem?
			</div>
		
			<div class="tile1" data-content="hobby">		
			<i class="icon-garden"></i>
			<br />Moje Hobby
			</div>

			<div style="clear:both;"></div>

			<div class="tile2" data-content="osiagniecia">		
			<i class="demo-icon icon-graduation-cap"></i> 
			<br />Moje osiągnięcia
			</div>

			<div class="tile3" data-content="mojchlopak">		
			<i class="icon-heart-filled"></i>
			<br />Mój Chłopak		
			</div>
			
			<div style="clear:both;"></div>
			<div class="tile4">	

			</div>
			<div style="clear:both;"></div>
			
		</div>
		<div class="square">
			<div class="tile5" >
				
		   </div>
			<div style="clear:both;"></div>
			<div class="yt" data-content="YouTube">	
				<i class="icon-youtube"></i>
			</div>
			<div class="fb" data-content="FaceBook">
				<i class="icon-facebook-rect"></i>
			</div>
			<div class="gplus" data-content="G-Plus">
				<i class="icon-gplus"></i>
			</div>
			<div class="twitter"> 
				<i class="icon-instagram-filled"></i>
			</div>
			<div style="clear:both;"> </div>

		</div>


<script type="text/javascript">
	$(".tile1, .tile2, .tile3, .fb, .yt, #KimJestem").click(function() {

		var content = $(this).data("content");	
		$.ajax({
			url: '../php8/loader.php',
			type: 'post',
			data: { Content : content },
				success: function(response) {
						if(content=="menuglowne"){
						$("#menu-content").html(response);							
						} else
						$(".tile5").html(response);
				}
		});
	
	});	
</script>