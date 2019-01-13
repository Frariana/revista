<div class="col l9">
	<br><h5><?php echo $data['categoria']; ?></h5><br>
	<?php if ($data['elementos']){ ?>
		<?php foreach ($data['elementos'] as $elemento) { ?>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
						<?php echo '<img width="100%" src="data:image/jpeg;base64,'.base64_encode( $elemento->imagen ).'"/>';?>
					</div>
					<div class="card-stacked">
						<div class="card-content">
						<p><a class="grey-text text-darken-3" href="<?php echo RUTA_URL.'/v/g/'.url($elemento->content_titulo); ?>" ><br> Por <strong><?php echo $elemento->creador ?></strong> | <script>formatoFecha('<?php echo $elemento->fecha ?>');</script></p>
						</div>
						<div class="card-action">
						<a href="<?php echo RUTA_URL.'/v/g/'.url($elemento->content_titulo); ?>">Ver</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php }else{ ?>
		<br><h5 class="grey-text center-align">Contenido no encontrado</h5>
	<?php } ?>
</div>
