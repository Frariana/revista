<div class="grey darken-3 grey-text text-lighten-4" style="padding-bottom: 2em">
	<?php if ($data['content']){  ?>
		<?php if ($data['content']->imagen){ 
			echo '<img class="materialboxed" width="100%" src="data:image/jpeg;base64,'.base64_encode( $data['content']->imagen ).'"/>';
		} ?>
		<br>
		<div class="container">
			Por <strong><?php echo $data['content']->creador ?></strong> | <script>formatoFecha('<?php echo $data['content']->fecha ?>');</script>
			<br><h3><?php echo $data['content']->content_titulo ?></h3>
			<div><?php echo $data['content']->cuerpo ?></div>
		</div>
	<?php }else{ ?>
		<br><h5 class="grey-text center-align">Contenido no encontrado</h5>
	<?php } ?>
</div>