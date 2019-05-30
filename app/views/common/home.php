<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6 l4">
	    	<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">
				<?php if ($content->imagen){ ?>
					<div class="card">
						<div class="card-image">
							<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
							<span class="card-title sombra-negra">
								<strong class="flow-text">
									<?php if ($content->icono){
										echo "<i class='material-icons'>".$content->icono."</i>";
									} ?>
									<?php echo $content->content_titulo; ?>
								</strong>
							</span>
						</div>
					</div>
				<?php }else{ ?>
					<div class="card blue-grey darken-1">
        				<div class="card-content white-text">
        					<span class="card-title flow-text">
								<?php if ($content->icono){
									echo "<i class='material-icons'>".$content->icono."</i>";
								} ?>
								<?php echo $content->content_titulo; ?>
        					</span>
		          			<p><?php echo $content->cuerpo; ?></p>
		        		</div>
		        	</div>
				<?php } ?>
	    	</a>
	  	</div>
	<?php } ?>
<?php }else{ ?>
	<div class="center-align" style="height: 400px">
		<br><h5 class="grey-text center-align">Sin contenido creado aún</h5>
	</div>
<?php } ?>

<script>
 $(document).ready(function(){
    $('.slider').slider({
		height : 600,
		indicators: false
	});
  });
     
</script>