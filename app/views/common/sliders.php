<?php if ($data['sliders']){?>
	<div class="slider">
		<ul class="slides">
			<?php foreach($data['sliders'] as $sliders){ ?>
				<li>
					<img src="data:image/jpeg;base64,<?php echo base64_encode($sliders->imagen);?>"/>
					<div class="caption left-align" style="text-shadow: 1px 1px #000;">
						<h2><?php echo $sliders->content_titulo; ?></h2>
						<h5 class="light grey-text text-lighten-3 truncate"><?php echo strip_tags($sliders->cuerpo).'...'; ?></h5><br>
						<a class="pulse waves-effect waves-light btn black btn-large" href="<?php echo RUTA_URL.'/v/g/'.url($sliders->content_titulo); ?>">Ver más</a>
					</div>
				</li>
			<?php } ?>
		</ul>
  	</div>
<?php } ?>