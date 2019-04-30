<?php if ($data['sliders']){?>
	<div class="slider">
		<ul class="slides">
			<?php foreach($data['sliders'] as $sliders){ ?>
				<li>
					<img src="data:image/jpeg;base64,<?php echo base64_encode($sliders->imagen);?>"/>
					<div class="caption left-align" style="text-shadow: 1px 1px #000;">
						<h2 style="text-transform: uppercase;"><?php echo $sliders->content_titulo; ?></h2>
						<h5 class="light grey-text text-lighten-3"><?php echo strip_tags($sliders->cuerpo).'...'; ?></h5><br>
						<a class="pulse waves-effect waves-light btn red darken-4" href="<?php echo RUTA_URL.'/v/g/'.url($sliders->content_titulo); ?>">Ver más</a>
					</div>
				</li>
			<?php } ?>
		</ul>
  	</div>
<?php } ?>

<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6 l4">
	    	<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">
				<?php if ($content->imagen){ ?>
					<div class="card">
						<div class="card-image">
							<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
							<span class="card-title" style='background: rgba(3, 3, 3, .3); text-shadow: 1px 1px #000000'>
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