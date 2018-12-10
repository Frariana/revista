<div class="col l9">
	<?php if ($data['content']){ ?>
		<br><h3><?php echo $data['content']->content_titulo ?></h3>
		<p class="new badge">Por <strong><?php echo $data['content']->creador ?></strong> | <script>formatoFecha('<?php echo $data['content']->fecha ?>');</script></p>
		<p><?php echo $data['content']->cuerpo ?></p>
	<?php }else{ ?>
		<br><h5 class="grey-text center-align">Contenido no encontrado</h5>
	<?php } ?>
</div>